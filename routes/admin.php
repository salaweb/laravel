<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\PostAdminController;



Route::resource('/post', PostAdminController::class);


//Route::get('/post', [PostAdminController::class,'index']);
// Route::get('/post/{post}', [PostAdminController::class,'show']);
// Route::get('/post/create', [PostAdminController::class,'create']);
// Route::get('/post/{post}/edit', [PostAdminController::class,'edit']);

// Route::post('/post', [PostAdminController::class,'store']);
// Route::put('/post/{post}', [PostAdminController::class,'update']);
// Route::delete('/post/{post}', [PostAdminController::class,'delete']);
