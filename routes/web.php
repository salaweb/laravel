<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\PostAdminController;
use App\Http\Controllers\Admin\CategoryAdminController;

use App\Http\Controllers\Web\BlogWebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


//Dashboard
Route::group([
    
    'prefix' => 'dashboard', 
    'middleware' => ['auth', 'admin']
    ], 
    
    function(){
        Route::resources([
            'post' => PostAdminController::class,
            'category' => CategoryAdminController::class,
        ]);    
    }
);

//Dashboard
Route::group(['prefix' => 'post'], function(){

    Route::controller(BlogWebController::class)->group(function(){

        Route::get('/','index')->name("web.blog.index");
        Route::get('/{post}','show')->name("web.blog.show");

    });     
});


require __DIR__.'/auth.php';
