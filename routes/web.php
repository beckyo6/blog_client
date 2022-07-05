<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentaireController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('article/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('categorie/{id}', [ArticleController::class, 'index'])->name('categorie.index');
Route::post('commentaire', [CommentaireController::class, 'store'])->name('commentaire.post');

