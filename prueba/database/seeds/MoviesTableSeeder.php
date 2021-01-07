<?php

use App\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for ($i = 0; $i < 50; $i++) {
            Movie::create([
                'name' => $faker->name,
                'code' => $faker->sentence,
                'year'=>$faker->year,
                'available'=>$faker->boolean(true),
            ]);
        }
    }

}
