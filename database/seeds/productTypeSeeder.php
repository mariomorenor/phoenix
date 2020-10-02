<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_types')->insert([
            'type'=>'simple'
        ]);
        DB::table('product_types')->insert([
            'type'=>'variable'
        ]);
        DB::table('product_types')->insert([
            'type'=>'grouped'
        ]);
    }
}
