<?php

use App\Http\Controllers\HiyaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HiyaController::class, 'index'])->name('home');
