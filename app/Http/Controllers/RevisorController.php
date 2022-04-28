<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Article::where('is_accepted', null)->first();
        return view ('revisor.index', compact('announcement_to_check'));
    }

    public function acceptAnnouncement(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message','Complimenti, hai accettato l\'annuncio');
    }

    public function rejectAnnouncement(Article $article) 
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message','Complimenti, hai rifiutato l\'annuncio');
    }
}
