<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Illuminate\Support\Facades\DB;

class mailController extends Controller
{
    public function index(){
        return view('index');
   }
    public function post(Request $req){
        $req->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'email'=>'required',
    		'sujet'=>'required',
    		'message'=>'required',
    	]);
        $data=[
            'nom'=>$req->nom,
            'prenom'=>$req->prenom,
            'email'=>$req->email,
            'sujet'=>$req->sujet,
            'messagebody'=>$req->message
        ];

        Mail::send('mail',$data,function($message)use ($data){
    		$message->from($data['email'],$data['nom']);
    		$message->to('elvallyn@gmail.com');
    		$message->subject($data['sujet']);
    	});
        Session::flash('messageenvoyer', 'votre message a été envoyer avec succes');
        // return redirect()->back();
        return redirect()->route('index');
    }
}
