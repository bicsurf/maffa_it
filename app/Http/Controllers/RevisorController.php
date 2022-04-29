<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\RevisorController;

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

    public function becomeRevisor(){
        Mail::to('admin@maffa.com')->send(new BecomeRevisor(Auth::user()));
        return redirect('/')->with('message','Complimenti, la tua richiesta di revisore è stata presa in carico');
    }

    public function makeRevisor(User $user){
        Artisan::call('presto:makeUserRevisor',["email"=>$user->email]);
        return redirect('/')->with('message','Complimenti, l\'utente è un revisore');
    }
}
