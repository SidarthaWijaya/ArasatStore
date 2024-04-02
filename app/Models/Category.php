<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Category extends Model
{
    use HasFactory;

    public function setSlugAttribute($value){
        $this->attributes['category_url']=Str::slug($value,'-');
    }

    public function getRouteKeyName(){
        return 'category_url';
    }
    public function product() {
        return $this->hasMany(Product::class);
    }
}
