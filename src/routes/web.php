<?php

use Illuminate\Support\Facades\Route;
use Khayrulshanto\Contact\Http\Controllers\ContactController;


Route::group(['namespace' => 'Khayrulshanto\Contact\Http\Controllers'], function () {

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'send'])->name('contact.store');
});
