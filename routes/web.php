<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    // return str('hello world')->upper();
    return view('welcome');
})->name('home');

Route::get('/endpoint', function () {
    return to_route('home');
    // return redirect()->route('home');
});

// Route Controller Grouping
Route::controller(PostController::class)->group(function () {
    Route::get('/posts', 'index');
    Route::get('/posts/{post}', 'show');
    Route::post('/posts/', 'store');
});
