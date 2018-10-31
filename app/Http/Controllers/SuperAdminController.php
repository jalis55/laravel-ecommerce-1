<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use DB;
use Session;
use App\Category;
use Validator;
class SuperAdminController extends Controller
{
        public function index()
    {
        $this->super_admin_auth_check();
        $dashboard_main_content=view('admin_pages.dashboard_home');
        return view('admin.admin_master')
               ->with('dashboard_main_content',$dashboard_main_content);
    }
    //category
        public function add_category()
    {
        $this->super_admin_auth_check();
        $data['all_cat']=DB::table('categories')->get();
        $add_category=view('admin_pages.add_category')->with('data',$data);
        return view('admin.admin_master')
               ->with('dashboard_main_content',$add_category);
    }
    public function save_category(Request $request)
    {
       $this->super_admin_auth_check();
      $postData = Input::all();
    // setting up custom error messages for the field validation
     $messages = [
         'category_name.required' => 'Enter email address',
       
     ];
    $rules = [
      'category_name' => 'required',
      
    ];

    // doing the validation, passing post data, rules and the messages
    $validator = Validator::make($postData, $rules, $messages);
    if ($validator->fails()) {
      // send back to the page with the input data and errors
      return Redirect::to('/add_category')->withInput()->withErrors($validator);
    }
  
    
    
  
  $data  =  Input::except(array('_token')) ;
  $rule  =  array(
                'category_name'       => 'required',
               
                   ) ;
    $validator = Validator::make($data,$rule);
    if ($validator->fails())
    {
    $messages = $validator->messages();
    //return Redirect::to('/admin/categories/create')->with('message', 'Register Failed');
  return Redirect::back()->witherrors($validator);

    }
    else
    {
  }
      // validation
        $this->validate($request, [
            'category_name' => 'required',
            'parent_id' => 'required',
        ]); 
     
     
        $category_model = new Category();

        $category_model->category_name = $request->category_name;  
        $category_model->parent_id = $request->parent_id;   
        
       
        // get level,  level = parent level + 1.
        $category_model->level = 0;
        if($category_model->parent_id)
        {
          $parent_cat_info =   DB::table('categories')->where('category_id',$category_model->parent_id)->first(); 

          $category_model->level = $parent_cat_info->level + 1;

        }      
               
                
        $category_model->save();
        
        
         // update parent has_child status 
        if($category_model->parent_id)
        {
           if($parent_cat_info->has_child != 1)
           { 
               DB::table('categories')
                ->where('category_id', $request->parent_id)
                ->update([
                  'has_child'=> 1
                ]);
           }
                 Session::flash('success-message', 'Successfully Performed !');        
      return Redirect::to('/manage-category');
      //save
         
   
    }
  }
    public function manage_category()
    {
        $this->super_admin_auth_check();
        $data['category_data']=DB::table('categories')->get();
        $manage_category=view('admin_pages.manage_category')->with('data',$data);
        
        return view('admin.admin_master')
               ->with('dashboard_main_content',$manage_category);   
    }
    
     public function published_category($id)
    {
        $data=array();
        $data['publication_status']=1;
        DB::table('categories')
              ->where('category_id',$id)
              ->update($data);
        return redirect::to('manage-category');
    }
    public function unpulished_category($id)
    {
        $data=array();
        $data['publication_status']=0;
        DB::table('categories')
              ->where('category_id',$id)
              ->update($data);
        return redirect::to('manage-category');
    }
    public function edit_category($id)
    {
        $this->super_admin_auth_check();
        $data['category_info_by_id']=DB::table('categories')
              ->select('*')
              ->where('category_id',$id)
              ->first();
        $edit_category=view('admin_pages.edit_category')
                      ->with('data',$data);     
              // print_r($data['$category_info_by_id']);
              // exit();
       return view('admin.admin_master')->with('dashboard_main_content',$edit_category);
    }
    public function update_category(Request $request)
    {
        $data=array();
        $data['category_name']=$request->category_name;
        $data['category_description']=$request->category_description;
        $category_id=$request->category_id;
        DB::table('categories')->where('category_id',$category_id)
                                 ->update($data);
        return redirect::to('manage-category');
    }
    public function delete_category($id)
    {
        DB::table('categories')
              ->where('category_id',$id)
              ->delete();
        return redirect::to('manage-category');
    }
    //end category
    //sub category
    public function add_sub_category()
    {
       // die('123');
        
        $this->super_admin_auth_check();
        $data['category']=DB::table('categories')->get();
        $add_sub_category=view('admin_pages.add_sub_category')->with('data',$data);
        return view('admin.admin_master')
               ->with('dashboard_main_content',$add_sub_category);
    }
    public function save_sub_category(Request $request)
    {

        $data=array();
        $data['sub_cat_name']=$request->sub_cat_name;
       
        $data['created_at']=date("Y-m-d H:i:s");
        DB::table('sub_categories')->insert($data);
        //return redirect::to('manage-sub-category');
        return redirect::to('add-sub-category');
    }
    public function manage_sub_category()
    {

        $this->super_admin_auth_check();
        $data['sub_category_data']=DB::table('sub_categories')->get();
        $manage_category=view('admin_pages.manage_sub_category')->with('data',$data);
        
        return view('admin.admin_master')
               ->with('dashboard_main_content',$manage_category);   
    }
    public function published_sub_category($id)
    {
        //die('123');
        $data=array();
        $data['publication_status']=1;
        DB::table('sub_categories')
              ->where('sub_cat_id',$id)
              ->update($data);
        return redirect::to('manage-sub-category');
    }
    public function unpulished_sub_category($id)
    {
        $data=array();
        $data['publication_status']=0;
        DB::table('sub_categories')
              ->where('sub_cat_id',$id)
              ->update($data);
        return redirect::to('manage-sub-category');
    }
    public function delete_sub_category($id)
    {
        DB::table('sub_categories')
              ->where('sub_cat_id',$id)
              ->delete();
        return redirect::to('manage-sub-category');
    }

    //end sub category
    //brands
    public function add_brand()
    {
        //die('123');
        $this->super_admin_auth_check();
        $data['sub_category']=DB::table('sub_categories')->get();
        $add_brand=view('admin_pages.add_brands')->with('data',$data);
        return view('admin.admin_master')
               ->with('dashboard_main_content',$add_brand);
    }
    public function save_brand(Request $request)
    {
        //die('123');
        $data=array();
        $data['brand_name']=$request->brand_name;
       
        $data['created_at']=date("Y-m-d H:i:s");
        DB::table('brands')->insert($data);
        //return redirect::to('manage-brand');
         return redirect::to('add-brand');
    }
    public function manage_brand()
    {

        $this->super_admin_auth_check();
        $data['brand_data']=DB::table('brands')->get();
        $manage_brand=view('admin_pages.manage_brands')->with('data',$data);
        
        return view('admin.admin_master')
               ->with('dashboard_main_content',$manage_brand);   
    }
    public function published_brand($id)
    {
        //die('123');
        $data=array();
        $data['publication_status']=1;
        DB::table('brands')
              ->where('brand_id',$id)
              ->update($data);
        return redirect::to('manage-brand');
    }

    public function unpulished_brand($id)
    {
        $data=array();
        $data['publication_status']=0;
        DB::table('brands')
              ->where('brand_id',$id)
              ->update($data);
        return redirect::to('manage-brand');
    }
    public function delete_brand($id)
    {
        DB::table('brands')
              ->where('brand_id',$id)
              ->delete();
        return redirect::to('manage-brand');
    }

    //end brands
        public function admin_logout()
    {
        Session::flash('admin_id','');
        Session::flash('admin_name','');
        Session::flash('message','you have logged out successfully');
        return redirect::to('admin-panel');
    }
       public function super_admin_auth_check()
    {
        session_start();
        $admin_id=session::get('admin_id');
        if($admin_id == NULL)
        {
            return redirect::to('admin-panel')->send();
        }
    }
}
