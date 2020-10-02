<?php

use App\Stock;
use Illuminate\Database\Seeder;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stock::create([
            "total_amount"=>rand(10,999),
            "product_id"=>1
        ]);
        Stock::create([
            "total_amount"=>rand(10,999),
            "product_id"=>2
        ]);
        Stock::create([
            "total_amount"=>rand(10,999),
            "product_id"=>3
        ]);
        Stock::create([
            "total_amount"=>rand(10,999),
            "product_id"=>4
        ]);
        Stock::create([
            "total_amount"=>rand(10,999),
            "product_id"=>5
        ]);
    }
}
