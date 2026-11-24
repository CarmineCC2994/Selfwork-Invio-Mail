<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangaController;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/chi-siamo', [PublicController::class, 'aboutUs'])->name('aboutUs');
Route::get('/chi-siamo/{name}', [PublicController::class, 'aboutUsDetail'])->name('aboutUsDetail');

Route::get('/contatti', [PublicController::class, 'contacts'])->name('contacts');
Route::post('/contatti/invia', [PublicController::class, 'submitContact'])->name('contacts.submit');

Route::get('/manga', [MangaController::class, 'mangalist'])->name('manga.list');
Route::get('/manga/detail/{id}', [MangaController::class, 'mangadetail'])->name('manga.detail');