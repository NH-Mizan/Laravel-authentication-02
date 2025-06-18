<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
    

    public function subcategories()
    {
        return $this->hasMany(Subcategory   ::class, 'category_id')->where('status', 1);
    }
 

}
