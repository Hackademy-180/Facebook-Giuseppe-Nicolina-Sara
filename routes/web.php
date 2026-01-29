<?php

use App\Http\Controllers\FaceController;
use Illuminate\Support\Facades\Route;
//homepage
Route::get('/', [FaceController::class, 'home'])->name("welcome");
//index rotta

Route::post('/face/store', [FaceController::class, 'store'])->name("post_store");
