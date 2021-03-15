<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketsController;
use App\Http\Controllers\SearchController;
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
    return view('pages/newticket');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('tickets',TicketsController::class);

Route::get('search',[App\Http\Controllers\TicketsController::class,'searchpage'])->name('searchpage');
Route::post('search',[App\Http\Controllers\TicketsController::class,'search'])->name('search');
Route::post('tblsearch',[App\Http\Controllers\TicketsController::class,'tblsearch'])->name('tblsearch');

