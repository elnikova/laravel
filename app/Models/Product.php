<?php

namespace App\Models;

use App\Scopes\ProductScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'slug', 'description', 'img'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id', 'id'); // модель, название столбца с внешним ключем, нахзвание столбца текущей модели, название столбца связанной модели.
    }

    public function scopeLatest($query)
    {
        $query->orderByDesc('created_at');
    }


}
