@extends('layouts.app')

@section('content')

<div class="edit-content">
  <div class="edit">
    <h1>EDIT Post</h1>
      <form action="{{ route('update.post', $post->id) }}" method="post">
          @csrf
          @method('PATCH')
          <div>
            <label for="author">CATEGORY</label>
            <input id="cate" type="text" name="category" value="{{ $post->category }}">
          </div>
          <div>
            <label for="title">TITLE</label>
            <input id="titl" type="text" name="title" value="{{ $post->title }}">
          </div>
          <div>
            <label for="content">CONTENT</label>
            <input id="conte" type="text" name="content" value="{{ $post->content }}">
          </div>
          <div>
            <label for="author_id">Author</label>
            <select id="auth" name="author_id">
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
          <button id="button" type="submit" name="button">Update Post</button>
        </form>
      </div>
</div>

@stop
