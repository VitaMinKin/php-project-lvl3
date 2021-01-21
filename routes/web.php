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

use App\Http\Controllers\DomainsController;
Route::get('/', [DomainsController::class, 'index'])->name('domains.index');
Route::post('/domains', [DomainsController::class, 'store'])->name('domains.store');
Route::get('/domains/{id}', [DomainsController::class, 'showDomain'])->name('domains.id');
Route::get('/domains', [DomainsController::class, 'showAllDomains'])->name('domains.all');
