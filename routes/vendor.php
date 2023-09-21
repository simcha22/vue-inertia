<?php

use App\Http\Controllers\Vendor\MenuController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'vendor',
    'as' => 'vendor.',
    'middleware' => ['auth'],
], function () {
    Route::get('menu', [MenuController::class, 'index'])->name('menu');
    Route::resource('categories', \App\Http\Controllers\Vendor\CategoryController::class);
    Route::resource('products', \App\Http\Controllers\Vendor\ProductController::class);
    Route::resource('staff-members', \App\Http\Controllers\Vendor\StaffMemberController::class);
});
