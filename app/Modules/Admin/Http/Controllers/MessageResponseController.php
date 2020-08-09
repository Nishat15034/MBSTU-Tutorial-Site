<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\message;
use App\MessageReply;
use DB;

use App\Mail\SendMessageReply;
use Illuminate\Support\Facades\Mail;

class MessageResponseController extends Controller
{
    public function index()
    {
        $messages = DB::table('messages')->orderBy('id', 'desc')->get();
        return view('admin::messages',compact('messages'));
    }

    public function show($id)
    {
        $message       = message::find($id);
        $message_replies = MessageReply::where('message_id',$id)->get();
        return view('admin::message_show',compact('message','message_replies'));
    }
    public function reply(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'message' => 'required',
        ]);

        $message_reply = new MessageReply;

        $email      = $data['email'];
        $message_id = $data['message_id'];

        $message_reply->message    = $data['message'];
        $message_reply->message_id = $data['message_id'];

        if($message_reply->save())
        {
            $id = DB::table('message_replies')->orderBy('id', 'desc')->get();
            $id = $id[0]->id;
            $message = MessageReply::find($id);
            
            Mail::to($email)->send(new SendMessageReply($message));

            return redirect('admin/message/view/'.$message_id)
                ->with('flash_message', 'Message sent Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/message/view/'.$message_id)
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}
