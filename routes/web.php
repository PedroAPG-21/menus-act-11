<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/', [MenuController::class, 'home'])->name('home');
Route::get('/photos', [MenuController::class, 'photos'])->name('photos');
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');

Route::get('/', function () {
    return view('welcome');
});
