<?php

use Illuminate\Database\Seeder;
use App\Product;

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
         $this->call(StatusProductSeeder::class);
         factory(Product::class,1000)->create();
    }
}
