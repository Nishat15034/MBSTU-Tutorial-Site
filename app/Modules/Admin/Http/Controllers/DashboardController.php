<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Course;
use App\Category;
use App\SubCategory;
use App\Topic;
use App\TopicContent;
use App\subscribe;
use App\message;
use DB;
use Auth;

class DashboardController extends Controller
{
    public function index()
    {

   		 $total_user = DB::table('users')->where('status',1)->count()-1;
   		 $pending_user = DB::table('users')->where('status',0)->count();
   		 $total_course = Course::all()->count();
   		 $total_category = Category::all()->count();
   		 $total_subcategory = SubCategory::all()->count();
   		 $total_topic = Topic::all()->count();
   		 $total_content = TopicContent::all()->count();
   		 $total_subscriber = subscribe::all()->count();
   		 $total_message = message::all()->count();

   		 $my_category = DB::table('categories')->where('user_id',Auth::user()->id)->count();
   		 $my_subcategory = DB::table('sub_categories')->where('user_id',Auth::user()->id)->count();
   		 $my_topic = DB::table('topics')->where('user_id',Auth::user()->id)->count();
   		 $my_topic_content = DB::table('topic_contents')->where('user_id',Auth::user()->id)->count();
         return view('admin::dashboard',compact('total_user','pending_user','total_course','total_category','total_subcategory','total_topic','total_content','total_subscriber','total_message','my_category','my_subcategory','my_topic','my_topic_content'));
    }
}
