<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [ContactController::class, 'index']);
Route::post('/addcontact', [ContactController::class, 'add']);
Route::get('/addcontact', [ContactController::class, 'addform']);