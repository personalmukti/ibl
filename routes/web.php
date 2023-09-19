<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index'])->name('homepage.index');
Route::get('/alternative', [PageController::class, 'home'])->name('homepage.home');
Route::get('/about', [PageController::class, 'about'])->name('homepage.about');
Route::get('/service', [PageController::class, 'service'])->name('homepage.service');
Route::get('/contact', [PageController::class, 'contact'])->name('homepage.contact');
Route::get('/partner', [PageController::class, 'partner'])->name('homepage.partner');
