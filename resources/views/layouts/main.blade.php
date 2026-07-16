<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasmine's Book Store @yield('title')</title>

</head>
<body>
    <header>
        <h1>Jasmine's Book Store @yield('title')</h1>
        <nav>
           <a href="{{route('products.list')}}">Products</a>
        </nav>
    </header>
    @yield('content')
    <footer>
  &#xA9; Copyright Week-03, 2026 Jasmine's Books Store.
</footer>
</body>
</html>