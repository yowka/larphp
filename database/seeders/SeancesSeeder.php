<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Seance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SeancesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = Genre::all();

        // Заполняем таблицу сеансов
        Seance::create([
            'title' => 'Мстители: Финал',
            'description' => 'Финальная битва Мстителей.',
            'price' => 500.00,
            'available_tickets' => 100,
            'show_date' => '2023-12-01',
            'age_restriction' => '12+',
            'image' => 'avengers.jpg',
            'duration' => 180,
            'genre_id' => $genres->random()->id,
        ]);

        Seance::create([
            'title' => 'Гарри Поттер и Философский камень',
            'description' => 'Первая часть истории о Гарри Поттере.',
            'price' => 400.00,
            'available_tickets' => 50,
            'show_date' => '2023-12-05',
            'age_restriction' => '6+',
            'image' => 'harry_potter.jpg',
            'duration' => 180,
            'genre_id' => $genres->random()->id,
        ]);

        Seance::create([
            'title' => 'Титаник',
            'description' => 'История любви на фоне крушения корабля.',
            'price' => 450.00,
            'available_tickets' => 75,
            'show_date' => '2023-12-10',
            'age_restriction' => '16+',
            'image' => 'titanic.jpg',
            'duration' => 180,
            'genre_id' => $genres->random()->id,
        ]);

        Seance::create([
            'title' => 'Оно',
            'description' => 'История о зловещем клоуне.',
            'price' => 480.00,
            'available_tickets' => 60,
            'show_date' => '2023-12-15',
            'age_restriction' => '18+',
            'image' => 'it.jpg',
            'duration' => 180,
            'genre_id' => $genres->random()->id,
        ]);
    }
}
