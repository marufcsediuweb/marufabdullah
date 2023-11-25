<?php

use App\Http\Controllers\MarufAbdullahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

Route::get('/', [MarufAbdullahController::class, 'homepage']);
Route::get('/home', [MarufAbdullahController::class, 'homepage']);
Route::get('/portfolio', [MarufAbdullahController::class, 'portfolio']);
Route::get('/agency', [MarufAbdullahController::class, 'agencyPage']);
Route::get('/link-nodes', [MarufAbdullahController::class, 'linkNodes']);
Route::get('/contact', [MarufAbdullahController::class, 'contactPage']);
Route::get('/privacy-policy', [MarufAbdullahController::class, 'privacyPage']);
Route::get('/refund-policy', [MarufAbdullahController::class, 'refundPage']);

Route::get('/blog', [BlogController::class, 'showBlog']);
