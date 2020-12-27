<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('articles/page/{page}', [ArticleController::class, 'index']);
Route::get('articles/{article}', [ArticleController::class, 'show']);

Route::get('categories/{category}/page/{page}', [CategoryController::class, 'show']);
Route::get('authors/', [AuthorController::class, 'index']);
Route::get('authors/{author}/page/{page}', [AuthorController::class, 'show']);
