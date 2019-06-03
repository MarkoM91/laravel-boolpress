<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Post::class, 100)->create()->each(function($post) { //ne lancia uno mettendo l'iseimo post all'interno della variabile; fammi 100 pst creali e salvali nel database per ogni post prendi e salvamelo nel iesima variabile $post prendi random dall'una alle cinque categorie che metto in categories

        $categories = Category::inRandomOrder()->take(rand(1,5))->get();
        $post->categories()->attach($categories);
      });
    }
}
