<?php

use App\Http\Controllers\BlogController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\WelcomeController;

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

//Route::get('/', [WelcomeController::class, 'show']);

Route:: get('/tests/{test}', [TestController::class, 'show']);

Route:: get('welcome', [WelcomeController::Class, 'show']);

Route:: get('profile', [ProfileController::Class, 'show']);

Route:: get('dashboard', [DashboardController::Class, 'show']);

Route:: get('faq', [FaqController::Class, 'show']);

Route:: get('blog', [BlogController::Class, 'show']);
