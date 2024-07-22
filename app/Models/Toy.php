<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toy extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'brand_id', 'category_id'];

    // Definizione della relazione con Brand
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    // Definizione della relazione con Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
