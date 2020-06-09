<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_types')->insert([
            'name' => "Ator"
        ]);

        DB::table('user_types')->insert([
            'name' => "Diretor"
        ]);

        echo "Tipo de Usuário Adicionado com Sucesso.".PHP_EOL;
    }
}
