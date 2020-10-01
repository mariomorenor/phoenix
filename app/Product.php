<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=[
        'name',
        'code',
        'description',
        'short_description',
        'regular_price',
        'sale_price',
    ];

    protected $with=['status','type'];

    public function status()
    {
        return $this->belongsTo(Status_Product::class,'status_product_id');
    }

    public function type()
    {
        return $this->belongsTo(Product_Type::class,'product_type_id');
    }
}
