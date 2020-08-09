<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Course;
use Auth;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        
        $courses = Course::all();
        return view('admin::course',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin::course_add');
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

        $this->validate($request, [
            'course_name'   => 'required',
        ]);

        $course = new Course;
        $user = Auth::user();

        $course->course_name   = $data['course_name'];
        $course->user_id       = $user->id;

        if($course->save())
        {
            return redirect('admin/course/add')
                ->with('flash_message', 'course Added Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/course/add')
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
        $course = Course::find($id);

        return view('admin::course_edit',compact('course'));
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
        $course = Course::find($id);
        $user = Auth::user();

        $data = $request->all();

        $this->validate($request, [
            'course_name'   => 'required',
        ]);

        $course->course_name   = $data['course_name'];
        $course->user_id       = $user->id;

        if($course->update())
        {
            return redirect('admin/course/edit/'.$id)
                ->with('flash_message', 'course Updated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/course/edit/'.$id)
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
        $course = Course::find($id);

        if($course->delete())
        {
            return redirect('admin/course')
                ->with('flash_message', 'course Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/course')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}
