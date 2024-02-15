<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
})->name('index');

Route::get('blog', function () {
    return view('blog');
})->name('blog');

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('listing', function () {
    return view('listing');
})->name('listing');

Route::get('testimonials', function () {
    return view('testimonials');
})->name('testimonials');

Route::get('contact', function () {
    return view('contact');
})->name('contact');

Route::get('single', function () {
    return view('single');
})->name('single');

Route::get('addCar', function () {
    return view('addCar');
})->name('addCar');

Route::get('test', function () {
    return view('test');
})->name('test');