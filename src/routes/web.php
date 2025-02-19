<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;

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

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'admin']);
});




/*
ユーザ側
*/
Route::get('/', [ContactController::class, 'index']);
Route::post('/user/confirm', [ContactController::class, 'verifyForm']);
Route::post('/user/thanks', [ContactController::class, 'thanks']);
