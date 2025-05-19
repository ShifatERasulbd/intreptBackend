<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SiteSettingController;
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
    Route::get('/post/edit/{id}', 'edit')->name('posts.edit');
    Route::put('/update/post/{id}', 'update')->name('posts.update');
    Route::get('/delete/post/{id}', 'destroy')->name('posts.delete');
    
});


  
  // Category All Route
  Route::controller(CategoryController::class)->group(function () {
    Route::get('/category', 'index')->name('category');
    Route::get('/add/category', 'create')->name('category.add');
    Route::post('/store/category', 'store')->name('category.store');
    Route::get('/category/edit/{id}', 'edit')->name('category.Edit');
    Route::put('/update/category/{id}', 'update')->name('category.update');
    Route::get('/delete/category/{id}', 'destroy')->name('category.delete');
    
});


Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
     \UniSharp\LaravelFilemanager\Lfm::routes();
 });


    // siteSetting Route
Route::controller(SiteSettingController::class)->group(function () {
    Route::get('/settings', 'index')->name('settings');
    Route::get('/add/setting', 'create')->name('setting.add');
    Route::post('/store/setting', 'store')->name('setting.store');
    Route::get('/setting/edit/{id}', 'edit')->name('setting.edit');
    Route::post('/update/setting', 'update')->name('setting.update');
    Route::get('/delete/setting/{id}', 'destroy')->name('setting.delete');
   
});


});

require __DIR__.'/auth.php';
