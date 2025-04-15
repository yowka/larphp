<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create(['name' => 'Комедия']);
        Genre::create(['name' => 'Боевик']);
        Genre::create(['name' => 'Фантастика']);
        Genre::create(['name' => 'Драма']);
        Genre::create(['name' => 'Ужасы']);
        Genre::create(['name' => 'Мелодрама']);
    }
}
