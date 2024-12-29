<?php

use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', \App\Http\Controllers\IndexController::class)->name('main.index');
