<?php

use Illuminate\Database\Seeder;
use Faker\Factory;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //reset the posts table
        DB::table('posts')->truncate();

        //generate 10 dummy data
        $posts = [];
        $faker = Factory::create();
        $date = Carbon::create(2020, 8, 12, 23);

        for($i = 1; $i <= 10; $i++){

        	$image = "Post_Image_" . rand(1,5) . ".jpg";
        	$date = $date->addDays($i);

        	$posts[] = [
        		'author_id' => rand(1, 3),
        		'title' => $faker->sentence(rand(8,12)),
        		'excerpt' => $faker->text(rand(250,300)),
        		'body' => $faker->paragraphs(rand(10,15), true),
        		'slug' => $faker->slug(),
        		'image' => rand(0,1) == 1 ? $image : NULL,
        		'created_at' => $date,
        		'updated_at' => $date,
                'published_at' => rand(1,0) == 0 ? NULL : $date->addDays($i + rand(4, 10)),
        	];
        }

        DB::table('posts')->insert($posts);
    }
}
