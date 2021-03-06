<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use App\Jobs\ResizeImage;
use Livewire\WithFileUploads;
use App\Jobs\GoogleVisionLabelImage;
use App\Jobs\GoogleVisionSafeSearch;
use App\Jobs\RemoveFaces;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class CreateArticle extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $price;
    public $category;
    public $temporary_images;
    public $images = [];

    protected $rules = [
        'title' => 'required|min:5|max:25',
        'description' => 'required|min:20|max:500',
        'category' => 'required',
        'price' => 'required|min:1|max:9999|numeric',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'
    ];

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }



    public function store()
    {
        $this->validate();

        $this->article = Category::find($this->category)->articles()->create($this->validate());

        $this->article->user()->associate(Auth::user());
        $this->article->save();

        if (count($this->images)) {
            foreach ($this->images as $image) {

                $newFileName = "articles/{$this->article->id}";
                $newImage = $this->article->images()->create(['path' => $image->store($newFileName, 'public')]);

                RemoveFaces::withChain([
                new ResizeImage($newImage->path, 400, 300),
                new GoogleVisionSafeSearch($newImage->id),
                new GoogleVisionLabelImage($newImage->id),
                ])->dispatch($newImage->id);

            }

            File::deleteDirectory(storage_path('/app/livewire-tmp'));
        }


        // Auth::user()->articles()->save($article);

        session()->flash('message', 'Annuncio salvato correttamente');


        $this->cleanForm();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
        $this->temporary_images = [];
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
