<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Jasmine's Book Store {{ $title ?? '' }}</title>
    <link rel="stylesheet" type="text/css"href="{{ asset('css/lec04-styles.css') }}" />
</head>
<body>
    <header id="app-main-header">
       <h1>
    Jasmine's Book Store
    <span @class($titleClass ?? [])>{{ $title}}</span>
    
</h1>
        <nav>
            <ul class="app-cmp-links">
               <li @class(['app-cl-active' => Route::is('products.*')])><a href="{{ route('products.list') }}">Products</a></li>
              <li @class(['app-cl-active' => Route::is('categories.*')])><a href="{{ route('categories.list') }}">Category</a>
</li>
         
           
        </nav>
    </header>
    @yield('content')
    <footer id="app-main-footer">
  &#xA9; Copyright Week-03, 2026 Jasmine's Books Store.
</footer>
</body>
</html>