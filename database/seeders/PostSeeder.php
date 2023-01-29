<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Post::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
       

        for ($i=0; $i < 30; $i++) { 
            $c = Category::inRandomOrder()->first();
            $title = Str::random(20);

            Post::create(
                [
                    'title' => $title,
                    'slug' => Str::slug($title),
                    'content' =>Str::random(50),
                    'category_id' =>$c->id,
                    'description' => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam</p>",
                    'posted' => "yes"
                ]
            );
        }
    }
}
