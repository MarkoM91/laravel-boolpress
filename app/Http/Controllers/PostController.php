<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;
use App\Post;

class PostController extends Controller
{
  function editPost($id) {

    $post = Post::findOrFail($id);
    return view('page.edit-page', compact('post'));
  }

  function updatePost(PostRequest $request, $id) {

    $validatedData = $request->validated();

    $post = Post::findOrFail($id)->update($validatedData);
    return redirect('/');
  }
}
