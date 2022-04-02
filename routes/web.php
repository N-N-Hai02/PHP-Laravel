<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('home');
});
Route::get('/home', 'App\Http\Controllers\myController@home');
Route::get('/about', function () {
    return view('about');
});
//====================
Auth::routes();

// Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\myController::class, 'Admin']);

// Route::prefix('admin')->group(function () {
//     Route::get('/dashboard',[App\Http\Controllers\Admin\DashboardController::class, 'index']);
// });

//==================== 
//=================================== Admin ====================================
Route::get('/Admin/doashboard', 'App\Http\Controllers\myController@Admin');
Route::get('/Admin/orders', 'App\Http\Controllers\myController@orders');


//==========Users===========
Route::get('/Admin/users', 'App\Http\Controllers\myController@users'); 
Route::get('/Admin/usersDelete/{id}','App\Http\Controllers\myController@usersDelete');
//==========end Users=======

//==========Orders==========
Route::get('/Admin/ordersDelete/{id}','App\Http\Controllers\myController@ordersDelete');
//========End Orders========

//==========Products========
Route::get('/Admin/product', 'App\Http\Controllers\myController@productsview'); 
Route::get('/Admin/productAdd', 'App\Http\Controllers\myController@productAdd'); 
Route::get('/Admin/productEdit/{id}', 'App\Http\Controllers\myController@productEdit'); 
Route::post('/Admin/productUpload/{id}', 'App\Http\Controllers\myController@productUpload');
Route::get('/Admin/productDelete/{id}', 'App\Http\Controllers\myController@productDelete');
Route::post('/Admin/product_Save', 'App\Http\Controllers\myController@productSave');
//==========Products========

//==========Client==========
Route::get('/Admin/client', 'App\Http\Controllers\myController@client'); 
Route::get('/Admin/clientAdd', 'App\Http\Controllers\myController@clientAdd');
Route::get('/Admin/clientEdit/{id}', 'App\Http\Controllers\myController@clientEdit');
Route::post('/Admin/clientUpload/{id}', 'App\Http\Controllers\myController@clientUpload');
Route::get('/Admin/clientDelete/{id}', 'App\Http\Controllers\myController@clientDelete');
Route::post('/Admin/client_Save', 'App\Http\Controllers\myController@clientSave');
//xem client
Route::get('/Admin/client','App\Http\Controllers\myController@clientView'); 
//==========End client==========

//==========NhanVien============
Route::get('/Admin/staffAdd', 'App\Http\Controllers\myController@staffAdd');
Route::get('/Admin/staffEdit/{id}', 'App\Http\Controllers\myController@staffEdit');
Route::post('/Admin/staffUpload/{id}', 'App\Http\Controllers\myController@staffUpload');
Route::get('/Admin/staffDelete/{id}', 'App\Http\Controllers\myController@staffDelete');
Route::post('/Admin/staff_Save', 'App\Http\Controllers\myController@staff_Save');
//xem client
Route::get('/Admin/staff','App\Http\Controllers\myController@staffView'); 
//==========End Nhanvien==========

//=================================== End Admin ====================================

// DK Khách Hàng
Route::get('/khachhang', 'App\Http\Controllers\myController@dangky_kh'); 

// Liên hệ : 
Route::get('/contact', 'App\Http\Controllers\myController@lienhe'); 
//
Route::get('/product', 'App\Http\Controllers\myController@product');

//Xem Ngày 
Route::get('/homnay','App\Http\Controllers\myController@xemngay'); 

// Đăng Ký validate
Route::post('/register_valid/submit','App\Http\Controllers\myController@SaveRegister_valid');
Route::get('/register_valid','App\Http\Controllers\myController@ShowForm_valid');


// Đăng Ký Thành Viên
// Route::post('/members/submit','App\Http\Controllers\myController@SaveMembers');
// Route::get('/members','App\Http\Controllers\myController@ShowFormMembers');
// Route::get('click_editMember/{id}','App\Http\Controllers\StudentController@edit_members');
// Route::post('/update_member/{id}','App\Http\Controllers\StudentController@update_members');

// Nhập Hóa Đơn, invoices:
Route::post('/invoices/submit','App\Http\Controllers\myController@SaveInvoices');
Route::get('/invoices','App\Http\Controllers\myController@NhapFormInvoices');



//---------------------------------------------------------------------------------
// xem Thành viên
Route::get('/xemkh','App\Http\Controllers\myController@xemtv'); 
//xem Sản Phẩm
Route::get('/xemsp','App\Http\Controllers\myController@xemsp'); 
