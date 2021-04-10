<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function getCreatedAtAttribute($value)
    {
        $value = strtotime($value);
        $value = date('d.m.Y', $value);
        return $value;
    }
}
