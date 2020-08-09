<?php

namespace App\Modules\User\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\TopicContent;
use App\Topic;
use App\subscribe;
use App\message;
use DB;

class FrontendController extends Controller
{
    public function home()
    {
        $active = 1;
        return view('user::home',compact('active'));
    }

    public function contact()
    {
        $active = 3;
        return view('user::contact',compact('active'));
    }

    public function subscribe(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:subscribes'
        ]);

        $subscribe = new subscribe;

        $subscribe->email = $data['email'];

        if($subscribe->save())
        {
            return redirect('/contact')
                ->with('flash_message', 'Subscribe Successfully')
                ->with('flash_notification', 'white');
        }
        else
        {
            return redirect('/contact')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'red');        
        }
    }

    public function subscribeHome(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'email' => 'required|string|email|max:255|unique:subscribes'
        ]);

        $subscribe = new subscribe;

        $subscribe->email = $data['email'];

        if($subscribe->save())
        {
            return redirect('/')
                ->with('flash_message', 'Subscribe Successfully')
                ->with('flash_notification', 'white');
        }
        else
        {
            return redirect('/')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'red');        
        }
    }

    public function unSubscribeHome(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'email' => 'required|string|email|max:255'
        ]);

        $email = $data['email'];
        $subscribe = DB::table('subscribes')->where('email',$email);

        

        if($subscribe->delete())
        {
            return redirect('/')
                ->with('flash_message', 'Unsubscribe Successfully')
                ->with('flash_notification', 'white');
        }
        else
        {
            return redirect('/')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'red');        
        }
    }

    public function unSubscribeHome2($email)
    {
        
        $subscribe = DB::table('subscribes')->where('email',$email);

        

        if($subscribe->delete())
        {
            return redirect('/confirm-unsubscribe/e')
                ->with('flash_message', 'Unsubscribe Successfully')
                ->with('flash_notification', 'white');
        }
        else
        {
            return redirect('/confirm-unsubscribe/e')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'red');        
        }
    }

    public function message(Request $request)
    {
        $data = $request->all();
        $this->validate($request, [
            'name'    => 'required',
            'email'   => 'required',
            'message' => 'required',
        ]);

        $message = new message;

        $message->name = $data['name'];
        $message->email = $data['email'];
        $message->message = $data['message'];
        if($message->save())
        {
            return redirect('/contact')
                ->with('flash_message1', 'Message Sent Successfully')
                ->with('flash_notification', 'white');
        }
        else
        {
            return redirect('/contact')
                ->with('flash_message1', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'red');        
        }
    }

    public function course($id)
    {
        $active = 2;
    	$category = Category::find($id);
    	$sub_categories = SubCategory::where('category_id',$id)->get();
    	$sub_category_id = SubCategory::where('category_id',$id)->first()->id;
    	$topic_id = Topic::where('sub_category_id',$sub_category_id)->first()->id;
    	$topic_contents = TopicContent::where('topic_id',$topic_id)->get();
        return view('user::course',compact('category','sub_categories','topic_contents','topic_id','active'));
    }

    public function topicContent($topic_id)
    {
        $active = 2;
    	$topic = Topic::find($topic_id);
    	$category_id = $topic->subCategory->category->id;
    	$category = Category::find($category_id);
    	$sub_categories = SubCategory::where('category_id',$category_id)->get();
    	$topic_contents = TopicContent::where('topic_id',$topic_id)->get();
    	return view('user::course',compact('category','sub_categories','topic_contents','topic_id','active'));
    }

     public function confirmUnsubscribe($email)
    {
        $active = 0;
        return view('user::unsubscribe',compact('email','active'));
    }
}
