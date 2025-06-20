<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     use HasFactory;

    protected $guarded = [];

      public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id')->select('id', 'name', 'slug');
    }
    public function subcategory()
    {
        return $this->hasOne(Subcategory::class, 'id', 'subcategory_id')->select('id', 'name', 'slug');
    }
    public function childcategory()
    {
        return $this->hasOne(Childcategory::class, 'id', 'childcategory_id')->select('id', 'name', 'slug');
    }
    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id')->select('id', 'name', 'slug');
    }


}
