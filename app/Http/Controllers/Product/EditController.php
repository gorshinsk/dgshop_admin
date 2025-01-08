<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Product $product)
    {
        // Загружаем все категории и цвета из базы данных
        $categories = Category::all();
        $colors = Color::all();

        // Передаем категории, цвета и продукт в представление
        return view('product.edit', compact('product', 'categories', 'colors'));
    }
}
