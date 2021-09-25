<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>"Márcio Gabriel G. Mengali",
            "email"=>"marciogabriel1998@gmail.com",
            "password"=> Hash::make('gabriel963')
            
        ]);
    }
}
