@extends('layout.home-layout')
@section('content')



      <div class="show">
        <a href="{{ route('create.new.post') }}">CREATE NEW POST</a>
        <form action="{{ route('search') }}" method="get">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" value="">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input type="text" name="content" value="">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select class="" name="category">
                  <option value="">choose category</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                     {{ $category-> name }}
                    </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="author">Author</label>
                <select class="" name="author">
                  <option value="">choose category</option>
                  @foreach ($authors as $author)
                    <option value="{{ $author->id }}">
                     {{ $author-> username }}
                    </option>
                  @endforeach
                </select>
            </div>
            <input type="submit" name="" value="SEARCH">
          </form>
        <table border="1">
          <thead>
            <td>TITLE</td>
            <td>CATEGORIES</td>
            <td>AUTHOR</td>
            <td>UPDATED AT</td>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td>{{ $post->title }}</td>
                <td>
                @foreach ($post -> categories as $category) <!-- devo prevedere che ci sia più categorie;-->
                  <a href="{{ route('post.by.category', $category -> name) }}">
                  {{ $category -> name }}
                  </a>
                @endforeach
                </td>
                <td>{{ $post-> author -> username }}</td>
                <td>{{ $post->updated_at }}</td>
                <td><a href="{{ route('edit.post', $post->id) }}"><i class="fa fa-edit"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </div>
@stop
