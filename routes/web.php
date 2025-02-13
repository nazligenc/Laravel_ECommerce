<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use App\Http\Controllers\AdminPanel\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return "Hello";
});
Route::get('/',[HomeController::class,'index'])->name('home');
// ADMIN PANEL //
Route::get('/admin',[AdminPanelHomeController::class,'index'])->name('admin');
//-----------ADMIN CATEGORY ROUTES---
Route::get('/admin/category',[CategoryController::class,'index'])->name('admin');
Route::get('/admin/category/create',[CategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[CategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[CategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[CategoryController::class,'update'])->name('admin_category_update');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
