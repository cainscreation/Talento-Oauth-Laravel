<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <title>LMS</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Courses</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Student</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Instructor</a>
            </li>
          </ul>
        </div>
        
            <ul class="navbar-nav">
                <li class="nav-item">
            @if (Route::has('login'))
            @auth
                <a class="nav-link" href="{{url('/home')}}">Dashboard</a>
                @else
                <a class="nav-link" href="{{route('login')}}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">Sign Up</a>
              @endif
              @endauth
              @endif
                </li>
            </ul>
      </nav>
      <div class="container">
        <div class="jumbotron text-center my-2">
          <h1>Welcome to <br>Learning Management System</h1>
        </div>
        <div class="row">
          <h1 class="my-1">Overview</h1>
          <div class="col-12 card-about">
Your subscription ends in <span class="text-danger" style="font-weight:bolder;">10 Days.</span>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-md-6 card-about">
<h2>Courses</h2>
<ul class="list-unstyled">
  <li>Angular</li>
  <li>HTML</li>
  <li>Bootstrap</li>
  <li>PHP</li>
</ul>
          </div>
        </div>
      </div>

</body>
</html>