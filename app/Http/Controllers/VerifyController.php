<?php

namespace App\Http\Controllers;

use App\Mail\SendMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Category;
// use App\Http\Controllers\Controller;

// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

use App\User;

class VerifyController extends Controller
{
    public function verify($token)
    {
    	User::where('token',$token)->firstOrFail()
    				->update(['token' => null]); 

    	session()->flash('status','Email Verified Successful');
    	return redirect('login');
    }

    
}


    