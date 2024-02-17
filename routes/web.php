<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;

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
// 
Route::get('test', function () {
    return view('test');
})->name('test');

//pages routes
Route::get('index',[PageController::class,'index'])->name('index');
Route::get('about',[PageController::class,'about'])->name('about');
Route::get('blog',[PageController::class,'blog'])->name('blog');
Route::get('contact',[PageController::class,'contact'])->name('contact');
Route::get('listing',[PageController::class,'listing'])->name('listing');
Route::get('single',[PageController::class,'single'])->name('single');
Route::get('testimonils',[PageController::class,'testimonials'])->name('testimonials');

//admin routes ------> car
Route::get('cars',[CarController::class,'index'])->name('cars');

Route::get('addcar',[CarController::class,'create'])->name('addcar');
route::post('storecar',[CarController:: class, 'store'])->name('storecar');
Route::post('uploadfile', [CarController::class, 'upload']);

route::get('destroy/{id}',[CarController::class,'destroy'])->name('destroy'); 

route::get('editcar/{id}',[CarController:: class, 'edit'])->name('editcar');
route::put('update/{id}',[CarController::class,'update'])->name('update');

// admin routes --------> testimonials

// admin routes ---------> 