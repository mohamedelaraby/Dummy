<?php

namespace App\Http\Controllers\Manage;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{

public function __construct(){
    $this->middleware('admin');
}

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
        
         /**
          * @var $email null|mix email to sent to,
          */
         $email ='test@test.com';
         // Send mail
         Mail::to($email)->send(new ContactFormMail($data));

          // Session message
         session()->flash('msg','Thanks for your message , We`ll be in touch');

         // Redirect back
         return redirect('contact');
     }

}
