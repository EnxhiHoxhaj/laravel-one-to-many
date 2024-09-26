<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run( Faker $faker): void
    {
        for ($i = 0; $i < 100; $i++){
            Post::create([
                'title'=> $faker->sentence,
                'slug'=> $faker->slug,
                'content'=> $faker->paragraph,
                'visit'=> $faker->numberBetween(50, 500),
                'positive_votes'=> $faker ->numberBetween(0, 80),
                'negative_votes'=> $faker ->numberBetween(0, 80),
                'created_at' => $faker->dateTimeBetween('-1 year', 'now'),
                'updated_at' => now(),
            ]);

        }
    }
}
