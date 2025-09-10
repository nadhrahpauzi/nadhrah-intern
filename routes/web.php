<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

// Home page
Route::get('/', function () {
    return view('pages.utama');
})->name('home');

// Static Hello
Route::get('/hello', function () {
    return "<h1>Selamat Datang</h1>
            <p>My first output for second day 9/9/25 haha</p>";
});

// Dynamic Hello
Route::get('/hello/{name}', [PageController::class, 'hello']);

// Dynamic Pages (hubungi, mengenai, utama, etc.)
Route::get('/page/{page}', [PageController::class, 'index']);

// Full CRUD for users
Route::resource('users', UserController::class);

Route::get('/', function () {
    return view('pages.utama');
})->name('home');


// Optional: Fallback 404 page
Route::fallback(function () {
    return response()->view('errors.404', [], 404);
});
