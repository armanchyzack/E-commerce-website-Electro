<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    function SubCategory(){
        return $this->hasMany(SubCategory::class);
    }
    public function Category(){
        return $this->hasMany(Category::class);
    }
    public function brnad(){
        return $this->hasMany(Brand::class);
    }
    function productimage(){
        return $this->hasMany(ProductImage::class);
    }
}
