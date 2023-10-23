<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Session;

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
    if (!Session::has('userid')) {
        return redirect('/landing');
    }
    return view('welcome');
})->name('dashboard');

Route::get('/landing', function () {
    return view('landing');
})->name("landing");

Route::get('/logout', function () {
    Session::flush();
    return redirect('/landing');
})->name('logout');

Route::post('/signup',[AuthenticationController::class,'Signup'])->name("signup");
Route::post('/login',[AuthenticationController::class,'Login'])->name("login");
Route::post('/upload',[GalleryController::class,'SaveImage'])->name("upload");
Route::get('/gallery',[GalleryController::class,'MyGallery'])->name("gallery");