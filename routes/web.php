<?php

use App\Http\Controllers\BlogController;

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\FaqController;

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\TestController;

use App\Http\Controllers\WelcomeController;

use App\Http\Controllers\ArticleController;

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

Route:: get('/welcome', [WelcomeController::Class, 'show']);

Route:: get('/profile', [ProfileController::Class, 'show']);

Route:: get('/dashboard', [DashboardController::Class, 'show']);

Route:: get('/faq', [FaqController::Class, 'show']);

Route:: get('/faq', [FaqController::Class, 'index']);

Route:: post('/faq/store', [FaqController::Class, 'store']);

Route:: get('/faq/edit', [FaqController::Class, 'edit']);

Route:: post('/faq/update', [FaqController::Class, 'update']);

Route:: get('/faq/destroy', [FaqController::Class, 'destroy']);

Route:: get('/faq/create', [FaqController::Class, 'create']);

Route::get('blog', [BlogController::class, 'show']);

//Route::post('/articles', [ArticleController::class,'index']);
//
//Route::post('/articles/store', [ArticleController::class,'store']);
//
//Route::get('/articles/create', [ArticleController::class,'create']);
//
//Route:: get('/articles/{article}', [ArticleController::Class, 'show']);
//
//Route:: get('/articles/{article}/edit', [ArticleController::Class, 'edit']);
//
//Route:: post('/articles/{article}/update', [ArticleController::Class, 'update']);
//
//Route:: get('/articles/{article}/destroy', [ArticleController::Class, 'destroy']);

Route:: resource('/articles', [ArticleController::Class]);
