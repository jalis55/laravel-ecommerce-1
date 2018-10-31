<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;


class AdminController extends Controller
{
	public function index()
    {
    	$this->admin_auth_check();
    	return view('admin_pages.login');
    }

 
    public function admin_login_check(Request $request)
    {
    	$email=$request->email;
    	//echo"$email <br>";
    	$password=$request->password;
    	//echo"$password <br>";
    	$result=DB::table('admins')->select('*')
    	                           ->where('admin_email',$email)
    							   ->where('admin_password',md5($password))->first();
    	if($result)
    	{
    		Session::put('admin_id',$result->id);
    		Session::put('admin_name',$result->admin_name);
    		return Redirect::to('/dashboard');
    	}
    	else
    	{
    		Session::flush('message','Invalid!! email or password');
    	}						   

    }
    public function admin_auth_check()
    {
        session_start();
        $admin_id=session::get('admin_id');
        if($admin_id != NULL)
        {
            return redirect::to('dashboard')->send();
        }
    }
}
