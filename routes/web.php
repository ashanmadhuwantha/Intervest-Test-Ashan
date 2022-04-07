<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelpGuideController;

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

// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/help-guide', [App\Http\Controllers\HelpGuideController::class, 'index'])->name('user.help.guide');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::post('/create-help', [App\Http\Controllers\HelpGuideController::class, 'create'])->name('create.help.guide');
// Route::middleware(['auth:sanctum'])->group(function () {
//     Route::get('/help-guide','HelpGuideController@index')->name('user.help.guide');
// });
