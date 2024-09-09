<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Controller4;

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about', [
        'name' => 'Anthony Santos',
        'email' => 'elgasing@gmail.com'
    ]);
});

Route::get('/pertemuan3tugas', function () {
    return view('home');
});

Route::get('/posts', [PostController::class, 'index']);

Route::get('/pertemuan4tugas', [Controller4::class, 'index']);