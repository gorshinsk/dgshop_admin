<?php

namespace App\Http\Resources\Product;
 
use App\Http\Resources\Category\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [

        'id' => $this->id,
        'title' => $this->title,
        'article' => $this->article,
        'description' => $this->description,
        'content' => $this->content,
        'image_url' => $this->imageUrl,
        'properties' => $this->properties,
        'preview' => $this->preview,
        'price' => $this->price,
        'quantity' => $this->quantity,
        'category_id' => new CategoryResource($this->category),

        ];
    }
}
