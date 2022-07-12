<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/blog', [PostController::class,'index'])->name('posts.index');
Route::get('/blog/create', [PostController::class,'create'])->name('posts.create');
Route::post('/blog', [PostController::class,'store'])->name('posts.store');
Route::get('/blog/{post}', [PostController::class,'show'])->name('posts.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
