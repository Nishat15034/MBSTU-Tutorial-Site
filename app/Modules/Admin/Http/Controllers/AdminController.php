<?php

namespace App\Modules\Admin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class AdminController extends Controller
{
    public function pendingUser()
    {
        $users = User::all();
        return view('admin::pending_user',compact('users'));
    }

    public function activeUser()
    {
        $users = User::all();
        return view('admin::active_user',compact('users'));
    }

    public function active($id)
    {
        $user = User::find($id);
        $user->status = 1;
        if($user->update())
        {
            return redirect('admin/user/pending')
                ->with('flash_message', 'User Activated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/user/pending')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    public function deactive($id)
    {
        $user = User::find($id);
        $user->status = 0;
        if($user->update())
        {
            return redirect('admin/user/active')
                ->with('flash_message', 'User Deactivated Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/user/active')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    public function delete($id)
    {
    	$user = User::find($id);
        if($user->delete())
        {
            return redirect('admin/user/pending')
                ->with('flash_message', 'User Deleted Successfully')
                ->with('flash_notification', 'success');
        }
        else
        {
            return redirect('admin/user/pending')
                ->with('flash_message', 'Some thing went to wrong!!!')
                ->with('flash_notification', 'danger');        
        }
    }

    public function adminLogOut()
    {
        Auth::logout();
        return redirect('/login');
    }
}
