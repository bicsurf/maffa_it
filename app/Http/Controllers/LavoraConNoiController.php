<?php

namespace App\Http\Controllers;


use App\Mail\sendContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LavoraConNoiController extends Controller
{
    public function sendContact(Request $request){
        
        $name = $request->input('name');
        $surname = $request->input('surname');
        $city = $request->input('city');
        $email = $request->input('email');
        $number = $request->input('number');
        $cv = $request->file('cv')->store(public_path('storage/files'));
        $info = compact('name','surname','city','email','number','cv');
        Mail::to('admin@maffa.com')->send(new sendContact($info));
        return redirect('/')->with('message','Complimenti, la tua richiesta per lavorare con noi è stata presa in carico');
    }
}
