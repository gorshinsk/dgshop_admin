<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Указываем, какие поля можно массово заполнять через запросы
    protected $fillable = ['title'];
}
