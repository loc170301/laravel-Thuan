<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoresController;
use App\Http\Controllers\ProductsController;

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

Route::get('header', function () {
    return view('Header\header');
 });

 Route::get('footer', function () {
    return view('Footer\footer');
 });

Route::get('/stores', [StoresController::class, 'index'])->name('stores_list'); 
Route::post('/stores', [StoresController::class, 'store'])->name('stores_add');
Route::get('/stores_add', [StoresController::class, 'show_add_form'])->name('stores_show_add_form');
Route::get('/stores/{id}', [StoresController::class, 'show'])->name('stores_show');
Route::put('/stores/{id}', [StoresController::class, 'edit'])->name('stores_edit');
Route::delete('/stores/{id}', [StoresController::class, 'delete'])->name('stores_delete');




Route::get('show-app', function () {
    return view('storesBasic\app');
 });

 Route::get('show-child', function () {
    return view('storesBasic\child');
 });

Route::get('call-view', function () {
    return view('storesBasic\home');
 });

 Route::get('show-content', function () {
    return view('storesBasic.newcontent');
 });

 Route::get('session', function () {
    return view('storesBasic\newsession');
 });

 Route::get('/products', [ProductsController::class, 'index'])->name('products_list'); 
 Route::post('/products', [ProductsController::class, 'store'])->name('products_add');
 Route::get('/products_add', [ProductsController::class, 'show_add_form'])->name('products_show_add_form');
 Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products_show');
 Route::put('/products/{id}', [ProductsController::class, 'edit'])->name('products_edit');
 Route::delete('/products/{id}', [ProductsController::class, 'delete'])->name('products_delete');
 

