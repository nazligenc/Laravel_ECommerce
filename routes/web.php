<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminPanelHomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return "Hello";
});
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/test',[HomeController::class,'test'])->name('test');
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
Route::get('/user',[HomeController::class,'user'])->name('user');
Route::post('/save',[HomeController::class,'save'])->name('save');
// ADMIN PANEL //
Route::get('/admin',[AdminPanelHomeController::class,'index'])->name('admin');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
