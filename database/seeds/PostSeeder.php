<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\Post;
use App\Author;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(Post::class, 100)->make()->each(function($post) { //ne lancia uno mettendo l'iseimo post all'interno della variabile; fammi 100 pst creali e salvali nel database per ogni post prendi e salvamelo nel iesima variabile $post prendi random dall'una alle cinque categorie che metto in categories

        $author = Author::inRandomOrder()->first();
        $post -> author()->associate($author);
        $post->save();

        $categories = Category::inRandomOrder()->take(rand(1,5))->get();
        $post->categories()->attach($categories);
      });
    }
}
