<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Home
Route::get('/','HomePageController@index');
//Admin panel
Route::get('admin-panel','AdminController@index');
Route::post('admin-login','AdminController@admin_login_check');
Route::get('dashboard','SuperAdminController@index');
Route::get('admin-logout','SuperAdminController@admin_logout');

// catagory
Route::get('/add-category','SuperAdminController@add_category')->name('add category');
Route::post('/save-category','SuperAdminController@save_category');
Route::get('/manage-category','SuperAdminController@manage_category')->name('manage category');
Route::get('/unpulished-category/{id}','SuperAdminController@unpulished_category');
Route::get('/pulished-category/{id}','SuperAdminController@published_category');
Route::get('/edit-category/{id}','SuperAdminController@edit_category')->name('edit category');
Route::post('/update-category','SuperAdminController@update_category');
Route::get('/delete-category/{id}','SuperAdminController@delete_category');
// end category
//sub categories
Route::get('/add-sub-category','SuperAdminController@add_sub_category')->name('Sub category');
Route::post('/save-sub-category','SuperAdminController@save_sub_category');
Route::get('/manage-sub-category','SuperAdminController@manage_sub_category')->name('manage sub category');
Route::get('/unpulished-sub-category/{id}','SuperAdminController@unpulished_sub_category');
Route::get('/pulished-sub-category/{id}','SuperAdminController@published_sub_category');

Route::get('/delete-sub-category/{id}','SuperAdminController@delete_sub_category');
//End sub categories
//brands
Route::get('/add-brand','SuperAdminController@add_brand')->name('Brands');
Route::post('/save-brand','SuperAdminController@save_brand');
Route::get('/manage-brand','SuperAdminController@manage_brand')->name('manage brand');
Route::get('/unpulished-brand/{id}','SuperAdminController@unpulished_brand');
Route::get('/pulished-brand/{id}','SuperAdminController@published_brand');
Route::get('/delete-brand/{id}','SuperAdminController@delete_brand');

//end brands
//products
Route::get('/add-product','ProductController@add_product');
Route::post('/store-product','ProductController@store_product');
Route::get('/manage-product','ProductController@manage_product');
Route::get('/unpublished-product/{id}','ProductController@unpublished_product');
Route::get('/published-product/{id}','ProductController@published_product');
Route::get('/edit-product/{id}', 'ProductController@edit_product');
Route::post('/update-product', 'ProductController@update_product');
Route::get('/delete-product/{id}', 'ProductController@delete_product');
Route::get('/add-top/{id}','ProductController@add_top');
Route::get('/remove-top/{id}','ProductController@remove_top');
//end products
//front end
Route::get('/view-product-details/{id}','HomePageController@view_product_details');
//start cart
Route::get('view-cart/','CartController@view_cart');
Route::post('add-to-cart','CartController@add_to_cart');
Route::post('update-to-cart','CartController@update_to_cart');
Route::post('delete-from-cart','CartController@delete_from_cart');
//end cart 
//end of front end
//checkout
Route::get('shipping','PaymentController@index');
Route::post('/order','PaymentController@order');
Route::get('place-order','PaymentController@place_order');
Route::get('user-profile','PaymentController@user_profile');
//end checkout



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
