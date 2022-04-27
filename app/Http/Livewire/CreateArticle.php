<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;
use App\Models\Category;

class CreateArticle extends Component
{
    public $title;
    public $description;
    public $price;
    public $category;

 protected $rules = [
     'title' => 'required|min:5|max:20', 
     'description' => 'required|min:20|max:50',
     'category'=>'required',
     'price' => 'required|min:1|max:9999|numeric',
 ];



    public function store()
    {
        $category = Category::find($this->category);
        $category->articles()->create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);
        $this->validate();
       
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
