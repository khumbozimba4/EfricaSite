<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [HomeController::class,'index']);
Route::get('/corporate-social-responsibility', [HomeController::class,'CRS'])->name("CSR");
Route::post('/messege-us', [HomeController::class,'Message'])->name("sendMessage");
Route::get('/about',[AboutController::class,'index'])->name("about");
Route::get('/contact',[ContactController::class,'index'])->name("contact");
Route::get('/blogs',[BlogController::class,'index'])->name("blogs");
Route::get('/blog/{slug}',[BlogController::class,'showBlog'])->name("blogread");

Route::get('/terms',function(){
  return view("terms");
})->name("terms");
Route::get('/about',[AboutController::class,'index'])->name("about");
Route::get('/team',[TeamController::class,'index'])->name("team");
 