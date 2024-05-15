<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeformController;
use App\Http\Controllers\ModerateurController;
use App\Http\Controllers\ModificationController;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/dashboard',[ModerateurController::class, 'showModerateur'])->name('dashboard');

});

Route::get('/experience',[HomeformController::class, 'create'])->name('experience');
Route::post('/experience',[HomeformController::class, 'store'])->name('post.experience');
Route::get('/',[HomeformController::class, 'showConsultationExperience'])->name('show.experience');
Route::get('/modification',[ModificationController::class,'edit'])->name('modification');
Route::get('/ModerationExperiences', [ModificationController::class, 'showConsultationExperience'])->name('show.modifexperience');

Route::get('/modification/{id}', [ModificationController::class, 'edit'])->name('modification');
Route::post('/modification/{id}', [ModificationController::class, 'update'])->name('modification.update');
Route::put('/modification/{id}', [ModificationController::class, 'update'])->name('modification.update');

require __DIR__.'/auth.php';

