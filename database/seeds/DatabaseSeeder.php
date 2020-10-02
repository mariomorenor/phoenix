<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Stock;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(userseeder::class);
         $this->call(productTypeSeeder::class);
         $this->call(StatusProductSeeder::class);
         factory(Product::class,5)->create();
         $this->call(StockSeeder::class);
    }
}
