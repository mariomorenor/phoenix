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
}
