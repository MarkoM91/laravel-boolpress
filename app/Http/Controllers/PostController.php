<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;
use App\Author;

class PostController extends Controller
{
  function editPost($id) {

    $post = Post::findOrFail($id);
    $categories = Category::all();
    $authors = Author::all();

    return view('page.edit-post', compact('post', 'categories', 'authors'));
  }

  function updatePost(PostRequest $request, $id) {

    $validatedData = $request->validated();

    $post = Post::findOrFail($id);
    $post->update($validatedData);



    $categoriesId = $validatedData['categories'];
    $categories = Category::find($categoriesId);


    $post -> categories() -> attach($categories);
    return redirect('/');
  }
}
