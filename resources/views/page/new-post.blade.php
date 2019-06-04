@extends('layout.home-layout')

@section('content')

  <div class="edit">
      <h1>CREATE NEW POST</h1>
      <form method="post" action="{{ route('save.new.post') }}">
        @csrf
        @method('POST')
        <div>
          <label for="title">TITLE</label>
          <input type="text" name="title" value="">
        </div>
        <div>
          <label for="content">CONTENT</label>
          <input type="text" name="content" value="">
        </div>
        <div>
          <label for="author_id">Author</label>
          <select class="" name="author_id">
            @foreach ($authors as $author)
              <option value="{{$author->id}}">{{$author->username}}</option>
            @endforeach
          </select>
        </div>
        <div>
          @foreach ($categories as $category)
            <input type="checkbox" name="categories[]" value="{{ $category -> id }}">{{ $category -> name }}<br> <!-- mi ridà un array di categorie-->
          @endforeach
        </div>
        <button type="submit" name="SAVE NEW CAR">SAVE NEW post</button>
      </form>
  </div>
@stop
