<?php

use App\Http\Controllers\PromotionController;
use App\Http\Controllers\StudentController;
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

Route::controller(PromotionController::class)->group(function () {
    Route::get('/', 'index')->name('promotion.index');

    Route::prefix('/promotion')->group(function () {
        Route::get('/create', 'create')->name('promotion.create');
        Route::post('/store', 'store')->name('promotion.store');

        Route::post('/update/{promotion:token}', 'update')->name('promotion.update');
        Route::get('/delete/{promotion:token}', 'delete')->name('promotion.delete');

        Route::get('/search', 'search')->name('promotion.search');

        Route::get('/{promotion:token}', 'view')->name('promotion.view');
    });
});


Route::controller(StudentController::class)->prefix('/student')->group(function () {
    Route::get('/create/{promotion:token}', 'create')->name('student.create');
    Route::post('/create/{promotion:token}', 'store')->name('student.store');

    Route::get('/edit/{student:token}', 'edit')->name('student.edit');
    Route::post('/update/{student:token}', 'update')->name('student.update');

    Route::get('/delete/{student:token}', 'delete')->name('student.delete');

    Route::get('/search/{promotion:token}', 'search')->name('student.search');
});
