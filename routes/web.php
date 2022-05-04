<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\RevisorController;

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

Route::get('/', [PublicController::class , 'home'])->name('home');
//Rotta per Categoria
Route::get('/categoria/{category}', [PublicController::class, 'categoryShow'])->name('categoryShow');

Route::get('/creazione/article',[ArticleController::class,'create'])->name('article.create')->middleware('auth');

Route::get('/dettaglio/annuncio/{article}', [ArticleController::class, 'showArticle'])->name('showArticle');

Route::get('/tutti/annunci/', [ArticleController::class, 'index'])->name('indexArticle');

// home revisore
Route::get('/revisor/home', [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');
//accetta annuncio
Route::patch('/accetta/annuncio/{article}', [RevisorController::class,'acceptAnnouncement'])->name('revisor.accept_announcement');
//rifiuta annuncio
Route::patch('/rifiuta/annuncio/{article}', [RevisorController::class,'rejectAnnouncement'])->name('revisor.reject_announcement');
// Richiedi di diventare revisore
Route::get('/richiesta/revisore', [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');
//Rendi utente revisore
Route::get('/rendi/revisore/{user}',[RevisorController::class,'makeRevisor'])->name('make.revisor');
//Ricerca annuncio
Route::get('/ricerca/annuncio', [RevisorController::class ,'searchArticles'])->name('articles.search');
//cambio lingua
Route::post('/lingua/{lang}',[PublicController::class,'setLanguage'])->name('set_language_locale');