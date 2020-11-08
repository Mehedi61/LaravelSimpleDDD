<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;


Route::get("/home", [HomeController::class, 'home']);

Route::get("/about", [AboutController::class, 'about']);

Route::get("/contact", [ContactController::class, 'contact']);