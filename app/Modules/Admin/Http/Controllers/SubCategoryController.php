<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\SubCategory;
use App\Category;
use Auth;

class SubCategoryController extends Controller
{
    
    public function index()
    {
        $sub_categories = SubCategory::all();
        return view('admin::subcategory',compact('sub_categories'));
    }

    public function indexByCategory($id)
    {
        $sub_categories = SubCategory::where('category_id',$id)->get();
        return view('admin::subcategory',compact('sub_categories'));
    }

    
    public function create()
    {
        $categories = Category::all();
        return view('admin::subcategory_add',compact('categories'));
        
    }

    
    public function store(Request $request)
    {
        $data = $request->all();

        $this->validate($request, [
            'category_id'       => 'required',
            'sub_category_name' => 'required',
        ]);
        $user = Auth::user();
        $sub_category = new SubCategory;

        $sub_category->category_id       = $data['category_id'];
        $sub_category->sub_category_name = $data['sub_category_name'];
        $sub_category->user_id           = $user->id;

        if($sub_category->save())
        {
            return redirect('admin/sub-category/add')
                ->with('flash_message', 'Sub-Category Added Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/sub-category/add')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    
   
    public function edit($id)
    {
        $categories = Category::all();
        $sub_category = SubCategory::find($id);
        return view('admin::subcategory_edit',compact('sub_category','categories'));
    }

    
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = Auth::user();
        
        $this->validate($request, [
            'category_id'       => 'required',
            'sub_category_name' => 'required',
        ]);

        $sub_category = SubCategory::find($id);

        $sub_category->category_id       = $data['category_id'];
        $sub_category->sub_category_name = $data['sub_category_name'];
        $sub_category->user_id           = $user->id;

        if($sub_category->update())
        {
            return redirect('admin/sub-category/edit/'.$id)
                ->with('flash_message', 'Sub-Category Updated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/sub-category/edit/'.$id)
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    
    public function destroy($id)
    {
        $sub_category = SubCategory::find($id);

        if($sub_category->delete())
        {
            return redirect('admin/sub-category')
                ->with('flash_message', 'Sub-Category Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/sub-category')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }
}
