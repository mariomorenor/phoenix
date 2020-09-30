<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock_control extends Model
{
    protected $fillable=[
        "date",
        "action",
        "amount"
    ];

    protected $casts=[
        'date'=>"date",
        "amount"=>"integer",
    ];

    public function product()
    {
        return $this->hasOne(Product::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
