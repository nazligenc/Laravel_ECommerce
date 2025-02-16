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
Route::prefix('admin')->name('admin.')->group(function() {
    Route::prefix('category')->name('category.')->controller(CategoryController::class)->group(function () {

        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');

        Route::middleware([
            'auth:sanctum',
            config('jetstream.auth_session'),
            'verified',
        ])->group(function () {
            Route::get('/dashboard', function () {
                return view('dashboard');
            })->name('dashboard');
        });
    });
});
