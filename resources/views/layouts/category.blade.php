<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title','hello')</title>
    <link href="{{ asset('Frontend/css/bootstrap.css') }}" rel="stylesheet">
</head>
<body>

    <a href="{{route('category.create')}}">Create</a>
    <a href="{{route('category.all')}}">Allcategory</a>
    <a href="{{route('product.all')}}">AllProduct</a>

    @yield('content')
</body>
</html>
