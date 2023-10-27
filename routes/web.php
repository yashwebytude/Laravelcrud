<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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
    return view('create');
});

/** view */
Route::get('/',[ProductController::class,'index'])->name('index');
Route::get('read/{id}',[ProductController::class,'read'])->name('read');

/** create */
Route::get('create',[ProductController::class,'create'])->name('create');
Route::post('store',[ProductController::class,'store'])->name('store');

Route::post('store1',[ProductController::class,'store1'])->name('store1');

/** update */
Route::get('edit/{id}', [ProductController::class,'edit'])->name('edit');
Route::post('update/{id}', [ProductController::class,'update'])->name('update');

/* delete */
Route::get('delete/{id}', [ProductController::class,'delete'])->name('delete');

/** Items cate/subcate */
Route::get('itemsform',[ProductController::class,'itemsform'])->name('itemsform');
Route::post('subcategory',[ProductController::class,'subcategory'])->name('subcategory');

/** Deleted Product and restore */
Route::get('deleteentry',[ProductController::class,'deleteentry'])->name('deleteentry');
Route::get('restoreentry/{id}',[ProductController::class,'restoreentry'])->name('restoreentry');
Route::get('permenentdelete/{id}',[ProductController::class,'permenentdelete'])->name('permenentdelete');