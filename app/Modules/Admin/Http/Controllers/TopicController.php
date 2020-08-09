<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Topic;
use Auth;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all();
        return view('admin::topic',compact('topics'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin::topic_add',compact('categories'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $user = Auth::user();
        $this->validate($request, [
            'sub_category_id' => 'required',
            'topic_name'      => 'required',
        ]);

        $topic = new Topic;

        $topic->sub_category_id = $data['sub_category_id'];
        $topic->topic_name      = $data['topic_name'];
        $topic->user_id      = $user->id; 

        if($topic->save())
        {
            return redirect('admin/topic/add')
                ->with('flash_message', 'Topic Added Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/topic/add')
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $topic = Topic::find($id);
        $categories = Category::all();
        return view('admin::topic_edit',compact('topic','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = Auth::user();
        $this->validate($request, [
            'sub_category_id' => 'required',
            'topic_name'      => 'required',
        ]);

        $topic = Topic::find($id);

        $topic->sub_category_id = $data['sub_category_id'];
        $topic->topic_name      = $data['topic_name'];
        $topic->user_id         = $user->id; 

        if($topic->update())
        {
            return redirect('admin/topic/edit/'.$id)
                ->with('flash_message', 'Topic Updated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/topic/edit/'.$id)
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        

        $topic = Topic::find($id);

        if($topic->delete())
        {
            return redirect('admin/topic')
                ->with('flash_message', 'Topic Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/topic')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}
