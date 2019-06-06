@extends('layouts.app')
@section('content')


      <a id="create_new_post" href="{{ route('create.new.post') }}"><i class="fa fa-plus"></i>CREATE NEW POST</a>
      <div class="show">
        <table border="1">
          <thead>
            <td>Edit</td>
            <td>Title</td>
            <td>Categories</td>
            <td>Author</td>
            <td>Updated At</td>
          </thead>
          <tbody>
            @foreach ($posts as $post)
              <tr>
                <td><a href="{{ route('edit.post', $post->id) }}"><i class="fa fa-edit"></i></a></td>
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
              </tr>
              @endforeach
            </tbody>
            </table>

        <form id="author_search" action="{{ route('search') }}" method="get">
            <div class="form-group">
                <label for="title">Title</label>
                <input id="tit" type="text" name="title" value="">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <input id="con"type="text" name="content" value="">
            </div>
            <div class="form-group">
                <label  for="category">Category</label>
                <select id="cat" class="" name="category">
                  <option value="">choose category</option>
                  @foreach ($categories as $category)
                    <option value="{{ $category->id }}">
                     {{ $category-> name }}
                    </option>
                  @endforeach
                </select>
            </div>
            <div class="form-group">
                <label  for="author">Author</label>
                <select id="aut" class="" name="author">
                  <option value="">choose category</option>
                  @foreach ($authors as $author)
                    <option value="{{ $author->id }}">
                     {{ $author-> username }}
                    </option>
                  @endforeach
                </select>
            </div>
            <input id="button" type="submit" name="" value="SEARCH">
          </form>
      </div>
@stop
