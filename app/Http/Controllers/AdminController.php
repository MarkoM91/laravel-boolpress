<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;
use App\Author;

class AdminController extends Controller
{

      function createNewPost() {

        $post = Post::all();
        $categories = Category::all();
        $authors = Author::all();

        return view('page.new-post', compact('post', 'categories', 'authors'));
      }

      function saveNewPost(PostRequest $request) {

        $validatedData = $request -> validated();

        $post = Post::create($validatedData);


        $categoriesId = $validatedData['categories'];
        $categories = Category::find($categoriesId);

        $post -> categories() -> attach($categories);

        return redirect('/');
        }

}
