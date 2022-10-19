<?php

use App\Http\Controllers\PromotionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(PromotionController::class)->group(function() {
    Route::get('/', 'index')->name('promotion.index');

    Route::get('/create', 'create')->name('promotion.create');
    Route::post('/promotions', 'store')->name('promotion.store');

    Route::get('/update/{promotion}', 'edit')->name('promotion.edit');
    Route::post('/update/{promotion}', 'update')->name('promotion.update');

    Route::get('/delete/{promotion}', 'delete')->name('promotion.delete');

    Route::get('/search', 'search');
});

