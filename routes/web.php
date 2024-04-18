<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeformController;

Route::get('/', function () {
    return view('home');
});

Route::get('/experience',[HomeformController::class, 'create'])->name('experience');
Route::post('/experience',[HomeformController::class, 'store'])->name('post.homeform');