<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Укажите, какие поля можно массово заполнять
    protected $fillable = ['name', 'description', 'price'];
}
