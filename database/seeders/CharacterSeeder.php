<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            [
                'name' => 'Reed Richards',
                'creation_year' => 1940,
                'strip_cartoon' => 'Fantastic Four',
                'draftsman_id' => 3
            ],
            [
                'name' => 'Iron Man',
                'creation_year' => 1997,
                'strip_cartoon' => 'avengers',
                'draftsman_id' => 1
            ],
            [
                'name' => 'Jack kirby',
                'creation_year' => 1965,
                'strip_cartoon' => 'Black bolt',
                'draftsman_id' => 2
            ] ,
            [
                'name' => 'Obelix',
                'creation_year' => 1984,
                'strip_cartoon' => 'Asterix',
                'draftsman_id' => 1
            ]          
        ]);
    }
}
