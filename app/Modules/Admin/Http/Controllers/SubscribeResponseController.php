<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\subscribe;
use App\SubscriberMessage;
use DB;

use App\Mail\SendMessage;
use Illuminate\Support\Facades\Mail;

class SubscribeResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribers = subscribe::all();
        return view('admin::subscriber',compact('subscribers'));
    }

    public function destroy($id)
    {
        

        $subscriber = subscribe::find($id);

        if($subscriber->delete())
        {
            return redirect('admin/subscribers')
                ->with('flash_message', 'Subscriber Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/subscribers')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
    public function createMessage()
    {
        return view('admin::subscriber_message_add');
    }

    public function storeMessage(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'title'   => 'required',
            'message' => 'required',
        ]);

        $message = new SubscriberMessage;

        $message->title = $data['title'];
        $message->message     = $data['message'];

        $emails = subscribe::all();
        $message;
        

        if($message->save())
        {
            $id = DB::table('subscriber_messages')->orderBy('id', 'desc')->get();
            $id = $id[0]->id;
            $message = SubscriberMessage::find($id);
            foreach($emails as $email)
            {
                Mail::to($email->email)->send(new SendMessage($message,$email));
            }
            return redirect('admin/subscribers/message')
                ->with('flash_message', 'Message sent Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/subscribers/message')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showMessage($id)
    {
        $message = SubscriberMessage::find($id);
        return view('admin::subscriber_message_show',compact('message'));
    }


    public function indexMessage()
    {
        $subscriber_messages = SubscriberMessage::all();
        return view('admin::subscriber_messages',compact('subscriber_messages'));
    }

    public function destroyMessage($id)
    {
        $message = SubscriberMessage::find($id);

        if($message->delete())
        {
            return redirect('admin/subscribers/message')
                ->with('flash_message', 'Message Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/subscribers/message')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}