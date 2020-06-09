<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'movie_type_id' => 1
        ]);

        DB::table('movies')->insert([
            'name' => Str::random(10),
            'description' => Str::random(50),
            'movie_type_id' => 2
        ]);

        echo "Filme Adicionado com Sucesso.".PHP_EOL;
    }
}
