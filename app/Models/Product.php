<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
    public function color()
    {
        return $this->belongsTo(Color::class, 'color_id');
    }

    public function getImageUrlAttribute() {
        // $this->imageUrl
        // return 'fevegre';
        return url(  'storage/' . $this->preview_image) ;
    }
}
