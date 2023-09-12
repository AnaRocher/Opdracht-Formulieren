<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SendSimpleFormMail;
use Illuminate\Support\Facades\Mail;


class FormulierController extends Controller
{
    public function review(){
        return view('review');
    }

    public function verzenden(Request $request) {
       $request->validate([
            'naam' => 'required|min:10',
            'email' => 'required|email',
            'score' => 'required|min:0|max:10',
            'bericht' => 'required|min:50|max:140',
            'voorwaarden' => 'required|accepted'           
       ]);
             
     
       Mail::to('hello@anarocher.be')->send(new SendSimpleFormMail([
        'naam' => $request->naam,
        'email' => $request->email,
        'score' => $request->score,
        'bericht' => $request->bericht,
        'voorwaarden' => $request->voorwaarden,
      ]));

      return redirect('/review')->with('status', 'We hebben jouw review ingestuurd!');
   
    }
    
}