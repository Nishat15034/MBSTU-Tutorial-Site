<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\SubCategory;
use App\TopicContent;
use Auth;

class TopicContentController extends Controller

{
    
    public function index()
    {
        $topic_contents = TopicContent::all();
        return view('admin::topic_content',compact('topic_contents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin::topic_content_add',compact('categories'));
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
            'topic_title' => 'required',
            'topic_id'    => 'required',
        ]);

        $topic_content = new TopicContent;

        $topic_content->topic_title       = $data['topic_title'];
        $topic_content->topic_id          = $data['topic_id'];
        $topic_content->topic_description = $data['topic_description'];
        $topic_content->topic_youtbe_url  = $data['topic_youtbe_url'];
        $topic_content->user_id           = $user->id;

        if($topic_content->save())
        {
            return redirect('admin/topic-content/add')
                ->with('flash_message', 'Topic Content Added Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/topic-content/add')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

   
    public function show($id)
    {
        $topic_content = TopicContent::find($id);
        return view('admin::topic_content_view',compact('topic_content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::all();
        $sub_categories = SubCategory::all();
        $topic_content = TopicContent::find($id);
        return view('admin::topic_content_edit',compact('topic_content','categories','sub_categories'));
    }

   
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = Auth::user();
        $this->validate($request, [
            'topic_title' => 'required',
            'topic_id'    => 'required',
        ]);

        $topic_content = TopicContent::find($id);

        $topic_content->topic_title       = $data['topic_title'];
        $topic_content->topic_id          = $data['topic_id'];
        $topic_content->topic_description = $data['topic_description'];
        $topic_content->topic_youtbe_url  = $data['topic_youtbe_url'];
        $topic_content->user_id           = $user->id;

        if($topic_content->update())
        {
            return redirect('admin/topic-content')
                ->with('flash_message', 'Topic Content Updated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/topic-content/edit/'.$id)
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
        $topic_content = TopicContent::find($id);

        if($topic_content->delete())
        {
            return redirect('admin/topic-content')
                ->with('flash_message', 'Topic Content Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/topic-content')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}
