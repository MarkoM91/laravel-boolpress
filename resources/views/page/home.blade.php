@extends('layout.home-layout')
@section('content')



      <div class="show">
        <a href="{{ route('create.new.post') }}">CREATE NEW POST</a>
        <table border="1">
          <thead>
            <td>TITLE</td>
            <td>CATEGORIES</td>
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
                <td>{{ $post->updated_at }}</td>
                <td><a href="{{ route('edit.post', $post->id) }}"><i class="fa fa-edit"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </div>
@stop
