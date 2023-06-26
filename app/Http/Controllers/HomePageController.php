<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class HomePageController extends Controller
{
    public function HomePage() {
        return view('homepage');
    }

    public function contact_mail_send(Request $request){

        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ]);

        if ($validatedData->fails()) {
            return redirect()->back()
                ->withErrors($validatedData)
                ->withInput()
                ->with('failure', 'Please input all the required details.');
        }
    

        Mail::to('vibarjosell@gmail.com')->send(new ContactMail($request));

        return redirect('/')->with('success', 'Thank you for Sending email.');
    }
}
