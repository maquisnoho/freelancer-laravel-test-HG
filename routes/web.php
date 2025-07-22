<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HiyaController;

Route::get('/', [HiyaController::class, 'index'])->name('home');
