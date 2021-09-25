<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\PseudoTypes\False_;

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
            "password"=> Hash::make('gabriel963'),
            "telefone"=>"(19)982784242",
            "nutricionista"=>True,
            "nutricionista_id"=>null
            
        ]);
        DB::table('users')->insert([
            "name"=>"Márcio Gabriel G. Mengali",
            "email"=>"caiohbasso94@gmail.com",
            "password"=> Hash::make('caio123'),
            "telefone"=>"(19)982784242",
            "nutricionista"=>True,
            "nutricionista_id"=>null
            
        ]);


    }
}
