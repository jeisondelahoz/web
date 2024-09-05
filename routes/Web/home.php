<?php

use App\Http\Controllers\Web\HomeController;

Route::prefix('Home')->group(function () {
    Route::get('/Uno', [HomeController::class, 'IndexHUno'])->name('IndexHUno');
});
