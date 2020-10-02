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
        'status_product_id',
        'product_type_id'
    ];

    protected $casts=[
        'regular_price'=>"double",
        'sale_price'=>"double",
        'status_product_id'=>"integer",
        'product_type_id'=>"integer",
    ];

    protected $with=['status','type','stock'];

    public function status()
    {
        return $this->belongsTo(Status_Product::class,'status_product_id');
    }

    public function type()
    {
        return $this->belongsTo(Product_Type::class,'product_type_id');
    }

    public function stock()
    {
        return $this->hasOne(Stock::class);
    }
}
