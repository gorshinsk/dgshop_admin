<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', function () {
    $categories = Category::all(); // Извлекаем все категории из базы данных
    return view('categories', compact('categories'));
});
