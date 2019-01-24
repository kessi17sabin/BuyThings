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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('admin/main','AdminController@index')->name('index');
Route::get('admin/dashboard','AdminController@dashboard')->name('dashboard');

Route::get('admin/product/showproduct','ProductController@showProduct')->name('showproduct');
Route::get('admin/product/createproduct','ProductController@createproduct')->name('createproduct');
Route::post('admin/product/storeproduct','ProductController@storeProduct')->name('storeproduct');
Route::get('admin/product/{product}/edit','ProductController@editProduct')->name('editproduct');
Route::put('admin/product/{product}/update','ProductController@updateProduct')->name('updateproduct');
Route::delete('admin/product/{product}/delete','ProductController@destroyProduct')->name('deleteproduct');

Route::get('admin/category/showcategory','CategoryController@showCategory')->name('showcategory');
Route::get('admin/category/createcategory','CategoryController@createCategory')->name('createcategory');
Route::post('admin/category/storecategory','CategoryController@storeCategory')->name('storecategory');
Route::get('admin/category/edit','CategoryController@edit')->name('editcat');
Route::get('admin/category/{cat}/edit','CategoryController@editCategory')->name('editcategory');
Route::put('admin/category/{cat}/update','CategoryController@updateCategory')->name('updatecategory');
Route::delete('admin/category/{cat}/delete','CategoryController@destroyCategory')->name('deletecategory');

Route::get('/admin/home', 'HomeController@index')->name('home');


Route::get('user/index','Frontend\FrontendController@index')->name('frontend_index');

