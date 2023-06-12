<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    use HasFactory;

    protected $table = "details";

    protected $fillable = [
        'category_id',
        'name',
        'price',
        'description',
        'image1',
        'image2',
        'image3',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
