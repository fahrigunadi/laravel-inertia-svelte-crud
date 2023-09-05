<?php

use App\Http\Controllers\UserController;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Home', [
        'title' => 'Hello World',
    ]);
});

Route::get('/about', function () {
    return Inertia::render('Home', [
        'title' => 'About',
    ]);
});

Route::resource('users', UserController::class);
