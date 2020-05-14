<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Aspera Travels</title>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->

</head>
<body>
<!-- <div class="container">
  <nav class="navbar navbar-expand-lg" style="background-color: #f7f7f7;">
    <a class="navbar-brand mr-auto" href="#">
      <img src="{{ asset('storage/AST Logo.png') }}" alt="Aspera Travels Logo" width="50px" id="logo">
    </a>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item col-3 active">
          <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" href="#">Sign In</a>
        </li>
        <li class="nav-item col-3">
          <a class="nav-link" href="#">Sign Up</a>
        </li>
      </ul>
    </div>

  </nav>
</div>

<div class="jumbotron" style="background-color: #f7f7f7;">
  <div class="row">
    <div class="col-1">
      <p class="h1">Aspera Travels</p>
    </div>
  </div>
  <div class="row">
    <div class="col-3">
      <p class="h3">Experience the best trips in style and in safety</p>
    </div>
    <div class="col-9">
      <img src="{{ asset('storage/Car_family.png') }}" alt="Aspera Travels Logo" width="800px" id="">
    </div>
  </div>
  <div class="row justify-content-center mt-5">
    <div class="col-lg-2">
      <img src="{{ asset('storage/scroll_arrows.png') }}" alt="Aspera Travels Logo" width="20px" id="">
    </div>
  </div>
</div> -->

<nav class="navbar navbar-expand-md ">
  <div class="container-fluid">
    <a class="navbar-brand mr-auto" href="#">
      <img src="{{ asset('storage/AST Logo.png') }}" alt="Aspera Travels Logo" width="50px" id="logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarReponsive">
      <span class="navbar-toggler-icon"><img src="{{ asset('storage/menu_lines.svg') }}" alt="Aspera Travels Logo" width="20px" id=""></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link " href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Sign In</a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">Sign Up</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!--Welcome header "Jumbotron"-->
<div class="container-fluid">
  <div class="row jumbotron mb-0">
    <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
      <p class="h1">Aspera Travels</p>
      <p class="lead">Experience the best trips in safety and in style</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
      <img src="{{ asset('storage/Car_family.png') }}" alt="Aspera Travels Logo" width="900px" id="">
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center mt-5">
      <p class="h6">Scroll for more</p>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">
      <img src="{{ asset('storage/scroll_arrows.png') }}" alt="Aspera Travels Logo" width="20px" id="">
    </div>
  </div>
</div>

<!--About section-->
<div class="container-fluid padding">
  <div class="row jumbotron pl-5 pb-0 mb-0">
    <div class="col-lg-3 col-xl-3 pl-3">
      <img src="{{ asset('storage/Car_road.svg') }}" alt="Aspera Travels Logo" width="300px" id="">
    </div>
    <div class="col-lg-3 col-lg-3 pt-5 ml-5">
      <p class="h1">Fast and Effective</p>
        <img src="{{ asset('storage/Speedometer.svg') }}" alt="Aspera Travels Logo" width="700px" id="">
    </div>
    <div class="col-lg-3 col-lg-3 pt-5">
      <button type="button" class="btn btn-outline-primary">About us</button>
      <p class="lead">Our services are swift and will never let you down</p>
    </div>
  </div>
</div>

<!--Services Card-->
<div class="container-fluid">
  <div class="row jumbotron" style="background-color: #51AECE">

  </div>
</div>
</body>
</html>
