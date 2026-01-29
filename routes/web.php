<?php

use App\Http\Controllers\FaceController;
use Illuminate\Support\Facades\Route;
//homepage
Route::get('/', [FaceController::class, 'home'])->name("welcome");
//index rotta
Route::get('/welcome', [FaceController::class, 'create'])->name('post_create');
Route::post('/face/store', [FaceController::class, 'store'])->name("post_store");
Route::get('/face/detail/{face}', [FaceController::class, 'show'])->name('post_detail');
Route::get('/face/edit/{face}', [FaceController::class, 'edit'])->name('post_edit');
