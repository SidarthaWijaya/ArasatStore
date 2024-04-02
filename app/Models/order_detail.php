<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order_detail extends Model
{

    protected $fillable=[
        'order_id','product_id','quantity', 'note'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }
    use HasFactory;
}
