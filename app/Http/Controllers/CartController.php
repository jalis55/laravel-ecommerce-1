<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Cart;

class CartController extends Controller
{
    public function add_to_cart(Request $request)
    {
    	$id=$request->product_id;
    	$qty=$request->qty;
    	$product_info=DB::table('products')->where('product_id',$id)->first();
    	$data['id']=$product_info->product_id;
    	$data['name']=$product_info->product_name;
    	$data['price']=$product_info->product_price;
    	$data['qty']=$qty;
    	$data['options']['image']=$product_info->product_image;
    	    	
    	Cart::add($data);

    	return redirect::to('view-cart');
    }
    public function delete_from_cart(Request $request)
    {
        $rowId=$request->rowId;
        Cart::update($rowId,0);
        return redirect::to('view-cart');
    }
    public function update_to_cart(Request $request)
    {
        $rowId=$request->rowId;
        $qty=$request->qty;
        Cart::update($rowId,$qty);
        return redirect::to('view-cart');
    }
    public function view_cart()
    {

    	$data['menu']=0;
    	return view('front_pages.mycart')->with('data',$data);
    }
}
