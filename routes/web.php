<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailableController;


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



Route::get('contact2', [MailableController::class, 'index']);
Route::get('auth-code', [MailableController::class, 'index']);


Route::post('contact2', [MailableController::class, 'send']);

