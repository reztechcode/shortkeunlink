<?php

use App\Http\Controllers\LinkController;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/about', function () {
    return view('short.about');
});

Route::get('/', [LinkController::class, 'index']);
Route::delete('/{id}', [LinkController::class, 'destroy']);
Route::get('/s/{id}', [LinkController::class, 'direk']);
Route::post('/short', [LinkController::class, 'short']);
