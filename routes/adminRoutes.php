<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CarController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;


Auth::routes(['verify'=>true]);


Auth::routes();

Route::group(['middleware' => ['verified']], function () {
        //admin routes ------> car
    Route::get('cars',[CarController::class,'index'])->name('cars');

    Route::get('addcar',[CarController::class,'create'])->name('addcar');
    route::post('storecar',[CarController:: class, 'store'])->name('storecar');
    Route::post('uploadfile', [CarController::class, 'upload']);

    route::get('destroycar/{id}',[CarController::class,'destroy'])->name('destroycar'); 

    route::get('editcar/{id}',[CarController:: class, 'edit'])->name('editcar');
    route::put('updatecar/{id}',[CarController::class,'update'])->name('updatecar');

    // admin routes --------> testimonials
    route::get('testimonials',[TestimonialController:: class, 'index'])->name('testimonials');
    route::get('edittestimonials/{id}',[TestimonialController:: class, 'edit'])->name('edittestimonials');
    Route::get('addtestimonials',[TestimonialController::class,'create'])->name('addtestimonials');
    route::post('storetestimonials',[TestimonialController:: class, 'store'])->name('storetestimonials');
    route::get('destroytestimonials/{id}',[TestimonialController:: class, 'destroy'])->name('destroytestimonials');
    route::put('updatetestimonials/{id}',[TestimonialController:: class, 'update'])->name('updatetestimonials');

    // admin routes ---------> categories
    Route::get('categories',[CategoryController::class,'index'])->name('categories');

    Route::get('addcategory',[CategoryController::class,'create'])->name('addcategory');
    Route::post('storecategory',[CategoryController::class,'store'])->name('storecategory');

    route::get('destroycategory/{id}',[CategoryController::class,'destroy'])->name('destroycategory'); 

    route::get('editcategory/{id}',[CategoryController:: class, 'edit'])->name('editcategory');
    route::put('updatecategory/{id}',[CategoryController::class,'update'])->name('updatecategory');

    //admin routes -----------> users
    Route::get('users',[UserController::class,'index'])->name('users');

    Route::get('adduser',[UserController::class,'create'])->name('adduser');
    Route::post('storeuser',[UserController::class,'store'])->name('storeuser');

    Route::get('edituser/{id}',[UserController::class,'edit'])->name('edituser');
    Route::put('updateuser/{id}',[UserController::class,'update'])->name('updateuser');

    //admin routes ------------> messages
    Route::get('messages',[MessageController::class,'index'])->name('messages');
    Route::get('showmessage/{id}',[MessageController::class,'show'])->name('showmessage');
    Route::get('destroymessage/{id}',[MessageController::class,'destroy'])->name('destroymessage');



    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

});