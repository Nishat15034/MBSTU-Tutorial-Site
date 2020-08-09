<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Topic;
use App\TopicContent;

class AngularController extends Controller
{
    public function getSubCategory($id)
    {
        $sub_categories = SubCategory::where('category_id',$id)->get();
        return $sub_categories;
    }

    public function getTopic($id)
    {
        $topics = Topic::where('sub_category_id',$id)->get();
        return $topics;
    }

    public function getEditTopic($sub_category_id)
    {
        
        $topics = Topic::where('sub_category_id',$sub_category_id)->get();
        return $topics;
    }

    public function getEditSubCategory($category_id)
    {
        
        $topics = SubCategory::where('category_id',$category_id)->get();
        return $topics;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
