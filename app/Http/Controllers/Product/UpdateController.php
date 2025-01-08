<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class UpdateController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(UpdateRequest $request, Product $product)
    {
        // Логируем входные данные
        Log::info('Update request data:', $request->all());

        // Валидируем входные данные
        $data = $request->validated();

        // Логируем данные после валидации
        Log::info('Validated data:', $data);

        // Если есть новое изображение, загружаем его и заменяем старое
        if (isset($data['preview_image'])) {
            Log::info('Uploading new image');
            // Удаляем старую картинку, если она есть
            if ($product->preview_image) {
                Storage::disk('public')->delete($product->preview_image);
            }

            // Загружаем новую картинку
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
        }

        // Обновляем связанные категории и цвета
        if (isset($data['category_id'])) {
            $product->category_id = $data['category_id'];
        }

        if (isset($data['color_id'])) {
            $product->color_id = $data['color_id'];
        }

        // Обновляем другие поля модели
        $product->update($data);

        // Логируем успешное обновление
        Log::info('Product updated successfully', ['product' => $product]);

        // Перенаправляем на страницу со списком продуктов
        return redirect()->route('product.index')->with('success', 'Товар успешно обновлен!');
    }
}
