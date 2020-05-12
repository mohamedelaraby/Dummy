<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    /**
     *  Create new contact message
     * @return Response
     */
    public function create(){
        return view('contact.create');
    }

     /**
     *  Send contact email content
     * @return Response
     */

     public function store (){
         $data = request()->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'message'=> 'required',
         ]);
        

         // Send mail
         Mail::to('test@test.com')->send(new ContactFormMail);
     }

}
