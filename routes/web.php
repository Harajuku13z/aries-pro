<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/presentation', [PageController::class, 'presentation'])->name('presentation');
Route::get('/expertise', [PageController::class, 'expertise'])->name('expertise');
Route::get('/secteurs', [PageController::class, 'sectors'])->name('sectors');
Route::get('/equipe', [PageController::class, 'team'])->name('team');
Route::get('/publications', [PageController::class, 'publications'])->name('publications');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
