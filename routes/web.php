<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/',[HomeController::class,'welcome'])->name('home.welcome');

Route:: get('/home.about',function(){
return view('home.about');
})->name('about');

Route:: get('/home.contact',function(){
return view('home.contact');
})->name('contact');


Route::get('/home.index',[HomeController::class,'index'])->name('home.index');

