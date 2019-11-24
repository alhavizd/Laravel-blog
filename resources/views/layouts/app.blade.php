<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Blog - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="#">Blog</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/')}}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ url('posts')}}">Posts</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      @yield('content')
    </div>
  </body>
  <script src="{{ asset('js/libs/jquery-3.4.1.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/libs/popper.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</html>
