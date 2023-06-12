<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected  $table = "products";
    protected $fillable = [
        'id',
        'category_id',
        'name',
        'price',
        'image1',
        'image2',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
