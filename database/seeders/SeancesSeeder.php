<?php
namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Seance;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;

class SeancesSeeder extends Seeder
{

    public function run(): void
    {
        // Get all genres from the database
        $genres = Genre::all();

        // Ensure there are genres available
        if ($genres->isEmpty()) {
            throw new \Exception('No genres found in the database. Please seed genres first.');
        }

        // Create 20 seances with dynamic data
        $faker = FakerFactory::create();
        for ($i = 0; $i < 20; $i++) {
            $this->createSeance($faker, $genres);
        }
    }
    private function createSeance($faker, $genres): void
    {
        $title = $faker->sentence(3);
        $description = $faker->paragraph(3);

        $price = $faker->numberBetween(300, 600) / 100;

        $availableTickets = $faker->numberBetween(50, 150);

        $showDate = $faker->dateTimeBetween('+1 day', '+30 days')->format('Y-m-d');

        $duration = $faker->numberBetween(90, 240);

        $genreId = $genres->random()->id;

        $ageRestrictions = ['G', 'PG', 'PG-13', 'R', 'NC-17'];
        $ageRestriction = $faker->randomElement($ageRestrictions);

        $image = $faker->unique()->word . '.jpg';

        Seance::create([
            'title' => $title,
            'description' => $description,
            'price' => $price,
            'available_tickets' => $availableTickets,
            'show_date' => $showDate,
            'age_restriction' => $ageRestriction,
            'image' => $image,
            'duration' => $duration,
            'genre_id' => $genreId,
        ]);
    }
}
