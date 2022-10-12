<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RelacionController;
use App\Models\Producto;

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
    return view('welcome');
});

Route::get('/login', function () {
    return 'welcome';
})->name('login');

Route::get('/productosuser', [RelacionController::class, 'index']);
Route::get('/prod/{id}', [ProductoController::class, 'show']);