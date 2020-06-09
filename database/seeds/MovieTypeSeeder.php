<?php

use Illuminate\Database\Seeder;

class MovieTypeSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_types')->insert([
            'name' => "Animação",
        ]);

        DB::table('movie_types')->insert([
            'name' => "Comédia"
        ]);

        echo "Tipo de Filme Adicionado com Sucesso.".PHP_EOL;
    }
}
