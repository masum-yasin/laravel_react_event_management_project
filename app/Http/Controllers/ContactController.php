<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        return view('frontend.layouts.contact');
    }
    public function store(Request $request){
         

    $contact = new Contact();
    $validate  =$request->validate(
        [
            'name'=>'required|min:4',
            'email'=>'required|email',
            'phone'=>'required|min:5',
            'message'=>'required|min:5',
        ]
    ) ;
    if($validate){
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ];
        $contact->insert($data);
        return redirect('contact')->with('msg','We are Receive All of users');
    }   
    }
    public function contactlist(){
        $contacts  = Contact::all();
        $data['messages'] = $contacts;
        return redirect('allcontact',$data);
    }
}
