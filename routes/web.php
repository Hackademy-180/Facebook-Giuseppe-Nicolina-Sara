<?php

use App\Http\Controllers\FaceController;
use Illuminate\Support\Facades\Route;
//homepage
Route::get('/', [FaceController::class, 'home'])->name("welcome");
//index rotta
Route::get("/", [FaceController::class, "home"])->name("post_create");
Route::post('/', [FaceController::class, 'store'])->name("post_store");

