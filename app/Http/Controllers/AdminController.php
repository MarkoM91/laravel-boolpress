<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;

class AdminController extends Controller
{

      function createNewPost() {

        $post = Post::all();
        $categories = Category::all();
        $authors = Category::all();

        return view('page.new-post', compact('post', 'categories', 'authors'));
      }

      function saveNewPost(PostRequest $request) {

        $validatedData = $request -> validated();

        $post = Post::create($validatedData);

        $authorId = $validatedData['author_id'];
        $author = author::find($authorId);

        $categoriesId = $validatedData['categories'];
        $categories = Category::find($categoriesId);

        $post -> author() -> associate($author);
        $post -> categories() -> attach($categories);

        return redirect('/');
        }

}
