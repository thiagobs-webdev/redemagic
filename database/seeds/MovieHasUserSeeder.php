<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieHasUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_has_user')->insert([
            'movie_id' => 1,
            'user_id' => 2
        ]);

        DB::table('movie_has_user')->insert([
            'movie_id' => 2,
            'user_id' => 1
        ]);

        echo "Usuário Adicionado ao Filme com Sucesso.".PHP_EOL;
    }
}
