<?php

declare(strict_types=1);

use App\Http\Controllers\UserController;
use App\Http\Controllers\ComicController;

Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{userId}/comics', [ComicController::class, 'index']);
Route::get('/test', function () {
    return 'web.phpが動いています';
});
