<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\adminController;
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

Route::get('/login', function () {return view('login');});
Route::get('/logout', function () {Session::forget('user');Session::forget('admin'); return redirect('/');});
Route::post("/login",[UserController::class, 'login']);
Route::get("/",[ProductController::class, 'index']);
Route::post("/detail",[ProductController::class, 'detail']);
Route::post("add_to_cart",[ProductController::class, 'addToCart']);
Route::get("cartlist",[ProductController::class, 'cartList']);
Route::get("removecart/{id}",[ProductController::class, 'removeCart']);
Route::get("ordernow",[ProductController::class, 'orderNow']);
Route::post("orderplace",[ProductController::class, 'orderPlace']);
Route::get("myorders",[ProductController::class, 'myOrders']);
Route::get('/register', function () { return view('register');});
Route::post("/registeruser",[UserController::class, 'registerUser']);
Route::get('/home', [adminController::class, 'adminDashboard']);
Route::get('/contact', function () {return view('contact');});
Route::get('/administrator', [adminController::class, 'adminList']);
Route::get("/admin_delete/{email}",[adminController::class, 'admin_delete']);
Route::get('/register_admin', function () {return view('register_admin');});
Route::post("/add_admin",[adminController::class, 'registerAdmin']);
Route::get("/admin_product",[ProductController::class, 'productList']);
Route::get('/add_product', function () {return view('add_product');});
Route::post("/adding_product",[ProductController::class, 'adding_product']);
Route::get("/product_delete/{id}",[ProductController::class, 'product_delete']);
Route::get("/admin_order",[ProductController::class, 'orderList']);
Route::get("/o_search",[ProductController::class, 'orderSearch']);
Route::get("/confirm_order/{id}",[ProductController::class, 'confirm_order']);
Route::get("/delete_order/{id}",[ProductController::class, 'delete_order']);
Route::get('/organisation',[adminController::class, 'organisation']);
Route::get('/about',[adminController::class, 'organisation2']);
Route::get('/add_organisation', function () {return view('add_organisation');});
Route::post('/adding_organisation',[adminController::class, 'adding_organisation']);
Route::get('/edit_organisation',[adminController::class, 'edit_organisation']);
Route::get('/add_staff', function () {return view('add_staff');});
Route::post('/save_organisation',[adminController::class, 'update_organisation']);
Route::get('/delete_organisation/{id}',[adminController::class, 'delete_organisation']);
Route::post('/adding_staff',[adminController::class, 'adding_staff']);
Route::post('/edit_staff',[adminController::class, 'edit_staff']);
Route::post('/save_staff',[adminController::class, 'update_staff']);
Route::get('/delete_staff/{id}',[adminController::class, 'delete_staff']);
Route::get('/contact',[adminController::class, 'organisation3']);





