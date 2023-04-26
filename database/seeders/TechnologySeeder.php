<?php

namespace Database\Seeders;

use App\Models\Technology;
use Faker\Generator as faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $technologys_name = ['PHP', 'HTML', 'Javascript', 'Bootstrap', 'Laravel', 'Vue', 'Tailwind'];

        foreach ($technologys_name as $technology_name) {
            $technology = new Technology();

            $technology->name = $technology_name;
            $technology->color = $faker->hexColor();

            $technology->save();
        }
    }
}