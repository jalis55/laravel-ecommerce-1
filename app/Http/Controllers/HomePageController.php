<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomePageController extends Controller
{
    public function index()
    {
    	$data['menu']=1;


    	$home_main_content=view('front_pages.home_content')->with('data',$data);
    	return view('front.home')->with('home_main_content',$home_main_content)->with('data',$data);
    }
    public function view_product_details($id)
    {
    	$data['menu']=0;
    	$data['product_by_id']=DB::table('products')->where('product_id',$id)->first();

    	$product_details=view('front_pages.view_product')->with('data',$data);
    	return view('front.home')->with('home_main_content',$product_details)->with('data',$data);
    }
}
