<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Ceider',
            'last_name'=>'Zambrano',
            'username'=>'Ceider97',
            'email'=>'cgzambranoa@pucesd.edu.ec',
            'password'=>Hash::make('ceider123'),
            'ci'=>2300430044
        ]);
        
    }

}
