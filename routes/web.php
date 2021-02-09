<?php

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

use App\Http\Controllers\UrlsController;
Route::get('/', [UrlsController::class, 'create'])->name('urls.create');
Route::post('/urls', [UrlsController::class, 'store'])->name('urls.store');
Route::get('/urls/{id}', [UrlsController::class, 'show'])->name('urls.show');
Route::get('/urls', [UrlsController::class, 'index'])->name('urls.index');
