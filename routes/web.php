<?php

use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Auth::routes();


Route::get('portafolio',[PortafolioController::class,'index'])->name('portafolio');



Route::get('portafolio/create',[PortafolioController::class,'create'])->name('create');

Route::post('portafolio',[PortafolioController::class,'store'])->name('store');

Route::get('portafolio/{id}',[PortafolioController::class,'show'])->name('show');

Route::get('portafolio/edit/{id}',[PortafolioController::class,'edit'])->name('edit');

Route::put('portafolio/{portafolio}',[PortafolioController::class,'update'])->name('update');

Route::delete('portafolio/{portafolio}',[PortafolioController::class,'destroy'])->name('destroy');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
