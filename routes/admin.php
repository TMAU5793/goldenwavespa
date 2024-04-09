<?php

use App\Http\Controllers\Admin\MainCtr;
use App\Http\Controllers\Admin\PromotionAdmin;
use App\Http\Controllers\Admin\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', [MainCtr::class, 'index'])->name('main');
    Route::get('/services', [Services::class, 'index'])->name('admin.sv');
    Route::get('/services/new', [Services::class, 'create'])->name('admin.svnew');
    Route::post('/services/store', [Services::class, 'store'])->name('admin.svstore');
    Route::get('/services/{id}/edit', [Services::class, 'edit'])->name('admin.svedit');
    Route::post('/services/update', [Services::class, 'update'])->name('admin.svupdate');

    //Promotion route
    Route::get('/promotion', [PromotionAdmin::class, 'index'])->name('admin.pmt');
    Route::get('/promotion/new', [PromotionAdmin::class, 'create'])->name('admin.pmtnew');
    Route::post('/promotion/store', [PromotionAdmin::class, 'store'])->name('admin.pmtstore');
    Route::get('/promotion/{id}/edit', [PromotionAdmin::class, 'edit'])->name('admin.pmtedit');
    Route::post('/promotion/update', [PromotionAdmin::class, 'update'])->name('admin.pmtupdate');

    Route::post('/tinyupload', [MainCtr::class, 'tinyupload'])->name('tinyupload');
});

