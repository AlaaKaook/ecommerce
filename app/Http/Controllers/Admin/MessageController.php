<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\AdminMail;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function index()
    {
        // Customer Messages
        $messages = Message::where('sender' , 'customer')->paginate(8);

        // $messages = Message::paginate(8);

        return view('admin.message.message_with_filter', ['messages' => $messages]);
    }


         //form to replay Message
    public function replay(Message $message)
    {
        return view('admin.message.replay'  ,['message'=>$message]);
    }

    public function store(Request $request ,Message $message)
    {
        $mailData = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'content' => 'required',
        ]);

        $mailData['sender'] = ('Admin' . Auth::user()->fname . Auth::user()->lname);

         Mail::to($request->email)->send(new AdminMail($mailData));

         $mailData['status'] = 1 ;
         $mailData['is_replay'] = 1 ;

        Message::create($mailData);

        // dd($message->id);
        $message->is_replay = 1 ;
        $message->update();

        return redirect()->route('admin.messages');
    }

    public function show(Message $message)
    {
       return view('admin.message.show' ,['message'=>$message]);
    }

    public function admin_messages()
    {
          $messages = Message::where('sender' ,'<>', 'customer')->paginate(8);

        //   $messages = Message::paginate(8);

        return view('admin.message.message_with_filter', ['messages' => $messages]);
    }

    public function replay_message()
    {
          $messages = Message::where('sender' , 'customer')->where('is_replay' , 1)->paginate(8);

        //   $messages = Message::paginate(8);

          return view('admin.message.message_with_filter', ['messages' => $messages]);
    }

    public function not_replay_message()
    {
          $messages = Message::where('sender' , 'customer')->where('is_replay' , 0)->paginate(8);

        //   $messages = Message::paginate(8);

          return view('admin.message.message_with_filter', ['messages' => $messages]);
    }
    public function destroy(Message $message)
    {
        $message->delete();

        return redirect()->route('messages.index')->with('status', 'Delete Message Successfully');
    }
}
