<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <script type="{{ mix('js/app.js') }}"></script>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>

        <header class="intro-header text-center mx-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Il Blog di Marko</h1>
                            <hr class="small">
                        </div>
                    </div>
                </div>
            </div>
        </header>

      @yield('content')

      @if ($errors->any())

        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div>
        @endif
        @if (session('success'))
        <div class="alert alert-danger">
            <div class="container">
                {{ session('success') }}
            </div>
        </div>
        @endif


    </body>
</html>
