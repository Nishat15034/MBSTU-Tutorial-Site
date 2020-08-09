<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Category;
use App\Course;
use Auth;

class CategoryController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        return view('admin::category',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('admin::category_add',compact('courses'));
    }

    
    public function store(Request $request)
    {
        
        $data = $request->all();
        $user = Auth::user();

        $this->validate($request, [
            'category_name'   => 'required',
            'course_id'       => 'required',
        ]);

        $category = new Category;

        $category->category_name = $data['category_name'];
        $category->course_id     = $data['course_id'];
        $category->user_id       = $user->id;

        if($category->save())
        {
            return redirect('admin/category/add')
                ->with('flash_message', 'Category Added Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/category/add')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
        
    }

    
    
    public function edit($id)
    {
        $category = Category::find($id);
        $courses = Course::all();
        return view('admin::category_edit',compact('category','courses'));
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
        $category = Category::find($id);

        $data = $request->all();

        $this->validate($request, [
            'category_name'   => 'required',
        ]);

        $category->category_name   = $data['category_name'];
        $category->course_id       = $data['course_id'];

        if($category->update())
        {
            return redirect('admin/category/edit/'.$id)
                ->with('flash_message', 'Category Updated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/category/edit/'.$id)
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
        $category = Category::find($id);

        if($category->delete())
        {
            return redirect('admin/category')
                ->with('flash_message', 'Category Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/category')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}
