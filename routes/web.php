<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', function () {
    return view('backend.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   
  // Posts All Route
  Route::controller(PostsController::class)->group(function () {
    Route::get('/post', 'index')->name('posts');
    Route::get('/add/post', 'create')->name('posts.add');
    Route::post('/store/post', 'store')->name('posts.store');
    Route::get('/post/edit/{id}', 'edit')->name('posts.Edit');
    Route::put('/update/post/{id}', 'update')->name('posts.update');
    Route::get('/delete/post/{id}', 'destroy')->name('posts.delete');
    
});
});

require __DIR__.'/auth.php';
