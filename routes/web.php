<?php

use App\Http\Controllers\TestController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;

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

//Route::get('/', [WelcomeController::class, 'show']);

Route::get('/tests/{test}', [TestController::class, 'show']);

Route:: get('/', [WelcomeController::Class, 'show']);
