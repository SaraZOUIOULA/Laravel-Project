<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DraftsmanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('draftsmen')->insert([
            [
                'name' => 'Jules Gaildrau',
                'birth_year' => 1898,
                'nationality' => 'American',
            ],
            [
                'name' => 'Vaughan Brian',
                'birth_year' => 1910,
                'nationality' => 'British',
            ],
            [
                'name' => 'Nicole Evans',
                'birth_year' => 1920,
                'nationality' => 'Canadian',
            ]            
        ]);
    }
}
