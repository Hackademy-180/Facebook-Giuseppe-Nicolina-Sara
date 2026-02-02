<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\FaceController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
//homepage
Route::get('/', [FaceController::class, 'home'])->name("welcome");
//index rotta
Route::get('/welcome', [FaceController::class, 'create'])->name('post_create');
Route::post('/face/store', [FaceController::class, 'store'])->name("post_store");
Route::get('/face/detail/{face}', [FaceController::class, 'show'])->name('post_detail');
Route::get('/face/edit/{face}', [FaceController::class, 'edit'])->name('post_edit');

// Rotta comments

Route::post('/comment/store', [CommentController::class, 'store'])->name('comment_store');
Route::get('/comment/create/', [CommentController::class, 'create'])->name('comment_create');
Route::get('/comment/detail/', [CommentController::class, 'show'])->name('comment_detail');
Route::delete("/comments/destroy/{comment}", [CommentController::class, "destroy"])->name("comment_destroy");
Route::get("/comments/edit/{comment}", [CommentController::class, "edit"])->name("comment_edit");

// Rotta profilo
Route::get('/profiles/index/{profile}', [ProfileController::class, 'show'])->name('profile_index');
Route::get('/profiles/edit/{profile}', [ProfileController::class, 'edit'])->name('profile_edit');
Route::put('/profile/update/{profile}', [ProfileController::class, 'update'])->name('profile_update');
// Rotte post preferiti
Route::post("/face/favorite/{face}", [FaceController::class, "favoriteFace"])->name("face_favorite");