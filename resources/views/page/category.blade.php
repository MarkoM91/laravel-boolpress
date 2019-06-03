@extends('layout.home-layout')
@section('content')



      <div class="show">
        <h1>{{ $category -> name }}</h1>

        <table border="1">
          <thead>
            <td>TITLE</td>
            <td>CATEGORIES</td>
            <td>UPDATED AT</td>
          </thead>
          <tbody>
            @foreach ($category -> posts as $post) <!--foreach sui post della categoria-->
              <tr>
                <td>{{ $post->title }}</td>
                <td>
                  @foreach ($post -> categories as $category)
                  <a href="{{ route('post.by.category', $category -> name) }}">
                    {{ $category -> name }}<br>
                  </a>
                  @endforeach
                </td>
                <td>{{ $post -> updated_at}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
@stop
