<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoresController;
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

Route::get('/stores', [StoresController::class, 'index'])->name('stores_list'); 
Route::post('/stores', [StoresController::class, 'store'])->name('stores_add');
Route::get('/stores_add', [StoresController::class, 'show_add_form'])->name('stores_show_add_form');
Route::get('/stores/{id}', [StoresController::class, 'show'])->name('stores_show');
Route::put('/stores/{id}', [StoresController::class, 'edit'])->name('stores_edit');
Route::delete('/stores/{id}', [StoresController::class, 'delete'])->name('stores_delete');


