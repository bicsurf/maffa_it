<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CreateArticle extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;

 protected $rules = [
     'title' => 'required|min:5|max:16', 
     'description' => 'required|min:20|max:50',
     'category'=>'required',
     'price' => 'required|min:1|max:9999|numeric',
 ];



    public function store()
    {
        $category = Category::find($this->category);
        $this->validate();
        $article=$category->articles()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
            'user_id'=>Auth::user()->id,
        ]);
        
        // Auth::user()->articles()->save($article);

        session()->flash('message','Annuncio salvato correttamente');
       
       
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
     }

    public function render()
    {
        return view('livewire.create-article');
    }
}
