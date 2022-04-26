<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticle extends Component
{
    public $title;
    public $description;
    public $price;





    public function store()
    {
        Article::create([
            'title'=>$this->title,
            'description'=>$this->description,
            'price'=>$this->price,
        ]);
        $this->cleanForm();
    }

    public function cleanForm()
     {
         $this->title = '';
         $this->description = '';
         $this->price = '';
     }

    public function render()
    {
        return view('livewire.create-article');
    }
}
