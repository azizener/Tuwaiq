<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemsController;

Route::get('/addtocart/{id}',[ItemsController::class,'addtocart'])->name('addtocart');

Route::get('/showproduct/{id}',[ItemsController::class,'showproduct'])->name('showproduct');
Route::get('/',[ItemsController::class,'showitemgroup'])->name('welcome');

Route::get('/logout',[ItemsController::class,'logout'])->name('logout');
route::get('/addgroupitem',[ItemsController::class, 'displayadditemsgroup'])->name('addgritem')->middleware('auth');

route::get('/cpanel',[ItemsController::class, 'displayitem'])->name('controlpanel')->middleware('auth');


route::post('/update',[ItemsController::class, 'update'])->name('update');
route::get('/edit/{x}',[ItemsController::class, 'edit'])->name('edit');
route::get('/del/{x}', [ItemsController::class, 'del'])->name('del');
route::post('/save', [ItemsController::class, 'SaveGroupItems'])->name('save');


Route::get('/itemgroup',[ItemsController::class,'GetItemGroup'])->name('itemgroup');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
