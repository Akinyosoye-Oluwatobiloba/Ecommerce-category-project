<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\CategoryController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function(){
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);

        Route::controller(App\Http\Controllers\Admin\CategoryController::class)->group(function(){
        Route::get('/category','index')->name('category');
        Route::get('/category/create','create')->name('category.create');
        Route::post('/category','store');
        Route::get('/category/{category}/edit', 'edit');
        Route::put('/category/{category}', 'update');

    });

    Route::get('/brands', App\Http\Livewire\Admin\Brand\Index::class);

        // // category routes
        // Route::get('/category', [CategoryController::class,'index'])->name('category');
        // Route::get('/category/create', [CategoryController::class,'create'])->name('category.create');
        // Route::post('/category', [CategoryController::class,'store']);

});
// Route::redirect('/logout', '/welcome');
