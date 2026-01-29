<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FaceController;
use Illuminate\Support\Facades\Route;
//homepage
Route::get('/', [FaceController::class, 'home'])->name("welcome");
//index rotta
Route::get('/welcome', [FaceController::class, 'create'])->name('post_create');
Route::post('/face/store', [FaceController::class, 'store'])->name("post_store");
Route::get('/face/detail/{face}', [FaceController::class, 'show'])->name('post_detail');
Route::get('/face/edit/{face}', [FaceController::class, 'edit'])->name('post_edit');

// Rotta comments

Route::get('/welcome', [CommentController::class, 'create'])->name('comment_create');
Route::post('/comment/store', [CommentController::class, 'store'])->name('comment_store');
Route::get('/comment/detail/{comment}', [CommentController::class, 'show'])->name('comment_detail');

