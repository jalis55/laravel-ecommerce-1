<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Cart;
use DB;
use Session;

class PaymentController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	// die('payment system comming soon');
        $data['menu']=0;
        return view('front_pages.customer_info')->with('data',$data);
    }
    public function user_profile()
    {
    	return view('auth.profile');
    }
    public function order(Request $request)
    {
        $user_id=Auth::user()->id;
            $arr['name']=$request->name;
            $arr['company_name']=$request->company_name;
            $arr['email']=$request->email;
            $arr['address']=$request->address;
            $arr['zilla']=$request->zilla;
            $arr['upazila']=$request->upazila;
            $arr['post_code']=$request->post_code;
            $arr['mobile']=$request->mobile;
        $shipping_info=json_encode($arr);
        $temporder=Cart::content();
        foreach ($temporder as $key => $cart) {
            $products[]['name']=$cart->name;
            $products[]['id']=$cart->id;
            $products[]['qty']=$cart->qty;
            $products[]['price']=$cart->price;

        }
        $oder_info=json_encode($products);
        $total_price=cart::total();
        $payment_method=$request->payment_method;
       // dd($payment);
        $data=array();
        $data['user_id']=Auth::user()->id;
        $data['shipping_info']=$shipping_info;
        $data['order_info']=$oder_info;
        //$data['total_price']=$total_price;
        $data['payment_method']=$payment_method;
        DB::table('orders')->insert($data);
        if($payment_method=='cod')
        {
            $data['menu']=0;
            $data['order_key']=0;
            return view('front_pages.payment_page')->with('data',$data);


        }
        if($payment_method=='ssl')
        {
            $data['menu']=0;
            $data['order_key']=1;
            return view('front_pages.payment_page')->with('data',$data);

        }
        else{
            die('something wrong');
        }



    }
    public function place_order()
    {

       Cart::destroy();
       Session::put('message','recived order successfully');
       return redirect::to('/');
    }
}
