<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;

class ProductController extends Controller
{
    public function add_product()
    {
    	$data['category']=DB::table('categories')->get();
    	$data['brand']=DB::table('brands')->get();
    	$add_product=view('products.add_products')->with('data',$data);
    	return view('admin.admin_master')->with('dashboard_main_content',$add_product);
    }
    public function store_product(Request $request)
    {
    	//die('123');
    	$data = array();
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
        $data['sub_cat_id'] = $request->sub_cat_id;
        $data['brand_id'] = $request->brand_id;
        $data['product_price'] = $request->product_price;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_description'] = $request->product_description;
        $data['publication_status'] = $request->publication_status;
        $image = $request->file('product_image');

        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/product_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                DB::table('products')->insert($data);
                Session::put('message', 'Product Add Successfully !');
                return Redirect::to('add-product');
            }
        } else {
            DB::table('products')->insert($data);
            Session::put('message', 'Product Add Successfully !');
            return Redirect::to('add-product');
        }
    }
    public function manage_product()
    {
    	//die('123');
    	$product_info = DB::table('products')
                        ->get();

        $view_product = view('products.manage_products')->with('product_info', $product_info);


        return view('admin.admin_master')->with('admin_main_content', $view_product);
    }
    public function published_product($product_id)
    {
        $data=array();
        $data['publication_status']=1;
        DB::table('products')
            ->where('product_id',$product_id)
            ->update($data);
        return Redirect::to('/manage-product');
    }
    public function unpublished_product($product_id)
    {
        $data=array();
        $data['publication_status']=0;
        DB::table('products')
            ->where('product_id',$product_id)
            ->update($data);
        return Redirect::to('/manage-product');

    }

    public function remove_top($product_id) {
        $data=array();
        $data['top_status']=0;
        DB::table('products')
            ->where('product_id',$product_id)
            ->update($data);
        return Redirect::to('/manage-product');
    }
    public function add_top($product_id)
    {
        $data=array();
        $data['top_status']=1;
        DB::table('products')
            ->where('product_id',$product_id)
            ->update($data);
        return Redirect::to('/manage-product');

    }

    public function edit_product($product_id)
    {
        $data['product'] = DB::table('products')
            ->where('product_id', $product_id)
            ->first();

        $data['category']=DB::table('categories')
            ->where('publication_status',1)
            ->get();


        $data['brand'] = DB::table('brands')
            ->get();

        $edit_product = view('products.edit_products')
            ->with('data', $data);
            

        return view('admin.admin_master')->with('admin_main_content', $edit_product);

    }
    public function update_product(Request $request)
    {
    	$data = array();
        $product_id = $request->product_id;
        $data['product_name'] = $request->product_name;
        $data['category_id'] = $request->category_id;
       
        $data['brand_id'] = $request->brand_id;

        $data['product_price'] = $request->product_price;
        $data['product_quantity'] = $request->product_quantity;
        $data['product_description'] = $request->product_description;

        $image = $request->file('product_image');
        if ($image) {
            $image_name = str_random(20);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/product_image/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data['product_image'] = $image_url;
                DB::table('products')
                    ->where('product_id',$product_id)
                    ->update($data);

                @unlink($request->product_old_image);
                Session::put('message', 'Update Product Information Successfully !');
                return Redirect::to('manage-product');
            }
        }
        else{
            DB::table('products')
                ->where('product_id',$product_id)
                ->update($data);
            Session::put('message', 'Update Product Information Successfully !');
            return Redirect::to('manage-product');
        }
    }
    public function delete_product($id)
    {
    	DB::table('products')->where('product_id', $id)
            ->delete();
        return Redirect::to('/manage-product');
    }


}
