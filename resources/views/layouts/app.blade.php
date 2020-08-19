<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">

        @include('partials.nav')

        <main class="py-4">
             <div class="container-fluid">
    <h2> {{ $categoryName ?? null }} Products </h2>
    <div class="row">

      <div class="col-lg-3">

        <div class="list-group">
            <a href="/products" class="list-group-item">Tous les produits</a> 
            @foreach ($categories as $category)
        <a href="?category_id={{$category->id}}" class="list-group-item">{{$category->name}}</a> 
            @endforeach
         

        </div>

      </div>
      <!-- /.col-lg-3 -->
            @yield('content')
        </main>
    </div>
    @yield('javascript')
</body>
</html>
