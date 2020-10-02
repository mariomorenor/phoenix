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
            'status'=>'Publicado'
        ]);
        DB::table('status_product')->insert([
            'status'=>'Privado'
        ]);
        DB::table('status_product')->insert([
            'status'=>'Pendiente'
        ]);
        DB::table('status_product')->insert([
            'status'=>'Borrador'
        ]);
    }
}
