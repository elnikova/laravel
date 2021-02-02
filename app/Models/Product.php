<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    public function getImgAttribute($value)
    {
        return $value ? $value : '/images/noimage.png';
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id', 'id'); // модель, название столбца с внешним ключем, нахзвание столбца текущей модели, название столбца связанной модели.
    }

    public function reviews()
    {
        return  $this->hasMany(Review::class, 'id', 'id', 'product_id');
    }


}
