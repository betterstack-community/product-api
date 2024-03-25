<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('products.index');
})->withoutMiddleware([
    \Illuminate\Session\Middleware\StartSession::class,
    \Illuminate\View\Middleware\ShareErrorsFromSession::class,
    \Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
]);
