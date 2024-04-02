<?php

use App\Http\Controllers\ContactCtr;
use App\Http\Controllers\HomeCtr;
use App\Http\Controllers\PromotionCtr;
use App\Http\Controllers\ServicesCtr;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeCtr::class, 'index'])->name('home');

Route::get('/services', [ServicesCtr::class, 'index'])->name('services');
Route::get('/services/{id}', [ServicesCtr::class, 'desc'])->name('services.desc');

Route::get('/promotion', [PromotionCtr::class, 'index'])->name('promotion');
Route::get('/promotion/{id}', [PromotionCtr::class, 'desc'])->name('promotion.desc');

Route::get('/contact', [ContactCtr::class, 'index'])->name('contact');


// Admin Route
require __DIR__.'/admin.php';