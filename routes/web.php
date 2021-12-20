<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SeoController;
 

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['role:admin']], function () { 
        Route::get('/user/create', [AdminController::class, 'userCreate'])->name('admin.userCreate');
    });

    Route::middleware(['auth'])->group(function () { 
       Route::get('/', [AdminController::class, 'index'])->name('admin.index');
       Route::get('/user', [AdminController::class, 'userIndex'])->name('admin.userIndex');  
       Route::resource('/seo', SeoController::class);
    });
});

 
