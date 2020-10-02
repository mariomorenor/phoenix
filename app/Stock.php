<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $fillable=[
        'total_amount',
        'product_id'
    ];
    
    public function product()
    {
        return $this->hasOne(Product::class);
    }
}
