<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use App\Models\Message;
use App\Models\User;
use App\Notifications\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view('frontend.Front_App.contact');
    }

    public function send_email(Request $request)
    {
        $mailData  = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);

// dd('sdxc');
          $mailData['sender'] = "customer";

          $mailData['status'] = 1 ;

         Message::create($mailData);


        // dd($mailData);
        Mail::to($request->email)->send(new ContactMail($mailData));
        User::where('email', 'admin@gmail.com')->first()->notify(new MessageReceived);

        return redirect()->route('/');
    }

}
