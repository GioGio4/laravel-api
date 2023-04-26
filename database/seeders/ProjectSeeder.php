<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Type;

use Illuminate\support\Str;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $types = Type::all()->pluck('id');

        for ($i = 0; $i < 50; $i++) {

            $project = new Project();

            $project->title = $faker->catchPhrase();
            // $project->pic = 'https://picsum.photos/200';
            $project->description = $faker->paragraph(20);
            $project->link = $faker->url();
            $project->type_id = $faker->randomElement($types);
            $project->save();
        }
    }
}
