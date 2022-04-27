<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home() {

        $articles = Article::take(6)->get()->sortBy('created_at');
        return view('welcome', compact('articles'));
    }

    public function categoryShow(Category $category) {
        return view('categoryShow', compact('category'));
    }
}
