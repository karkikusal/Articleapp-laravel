<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article app</title>
    @vite(['resources/js/app.js'])


</head>
<body>
    <nav>

    <ul class="nav justify-content-center navbar navbar-dark bg-dark fw-bold fs-1">

  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Article</a>
  </li>
</ul>
<ul class="nav justify-content-end">
@auth
<a href="{{route('login')}}" class="p-2 nav-link">{{auth()->user()->name}}</a>
@endauth

  @guest
  <a class="nav-link" href=".\login">Login</a>
  <a class="nav-link" href=".\register">register</a>
  @endguest
</nav>
  
</ul>
</nav>
@yield('content')


</body>
</html>
