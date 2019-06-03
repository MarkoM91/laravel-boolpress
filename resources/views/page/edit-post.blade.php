@extends('layout.home-layout')

@section('content')

    <h1>EDIT Post</h1>
    <div class="edit">
        <form action="{{ route('update.post', $post->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div>
              <label for="author">CATEGORY</label>
              <input type="text" name="category" value="{{ $post->category }}">
            </div>
            <div>
              <label for="title">TITLE</label>
              <input type="text" name="title" value="{{ $post->title }}">
            </div>
            <div>
              <label for="content">CONTENT</label>
              <input type="text" name="content" value="{{ $post->content }}">
            </div>
            <div>
              <label for="author_id"><h2>Author</h2></label>
              <select class="" name="author_id">
                @foreach ($authors as $author)
                  <option value="{{$author->id}}">{{$author->username}}</option>
                @endforeach
              </select>
            </div>
            <div>
                @foreach ($post -> categories as $category)
                  <input type="checkbox" name="categories[]" value="{{ $category->id }}">{{ $category->name }}<br>
                @endforeach
            </div>
            <button type="submit" name="button">Update Post</button>
          </form>
        </div>
@stop
