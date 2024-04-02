<?php

use App\Http\Controllers\Admin\MainCtr;
use App\Http\Controllers\Admin\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/', [MainCtr::class, 'index'])->name('main');
    Route::get('/services', [Services::class, 'index'])->name('admin.sv');
    Route::get('/services/new', [Services::class, 'create'])->name('admin.svnew');
});

