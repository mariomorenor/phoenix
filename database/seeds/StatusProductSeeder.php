<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status_product')->insert([
            'status'=>'publicado'
        ]);
        DB::table('status_product')->insert([
            'status'=>'privado'
        ]);
        DB::table('status_product')->insert([
            'status'=>'pendiente'
        ]);
        DB::table('status_product')->insert([
            'status'=>'borrador'
        ]);
    }
}
