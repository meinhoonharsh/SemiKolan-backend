<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
// Import Faker
use Faker\Factory as Faker;


class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        $interests = \App\Models\Interest::all();


        // Create 10 posts
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->posted_by = 1;
            $post->title = $faker->sentence(3);
            $post->caption = $faker->sentence(10);
            // Random HD Cover Image
            $post->image = $faker->imageUrl(640, 480);
            $post->interests = $interests->random(3)->pluck('id')->toArray();
            $post->active = true;
            $post->save();
        }
    }
}
