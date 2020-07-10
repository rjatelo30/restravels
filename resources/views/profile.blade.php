<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Aspera Travels</title>

<!-- CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/landing.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->

</head>
<body>
@include('inc.nav2')

<div class="container-fluid px-lg-5">
  <div class="row">
    <div class="col">
      <div class="card text-center"style="width: 20rem;">
        <div class="avatar mx-auto white py-3">
    <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20%2810%29.jpg" class="rounded-circle"
      alt="woman avatar" style="width: 243px;">
  </div>
          <div class="card-body" >
          <h5 class="card-title">First name <br> Last Name</h5>
          <h5 class="card-text">Email</h5>
          <p class="h6">robinsonrobike@gmail.com</p>
          <h5 class="card-text">Address</h5>
          <p class="h6">Phenom Estate<br>Nairobi, Kenya</p>
          <h5 class="card-text">Award</h5>
          <p class="h6">Globe Trotter</p>
          <a href="#" class="btn btn-primary btn-block" >Edit Profile</a>
          </div>
      </div>
    </div>
    <div class="col-8">
      <div class="row">
        <div class="col">
          <div class="card px-lg-5 px-rg-5 py-3 mb-3" style="width: 100%">
            <p class="h1">Destinations</p>
            <div class="row">
              <div class="col">
                <p class="lead">Last <br>Visit</p>
              </div>
              <div class="col-6">
                <p class="h2">Paris, France</p>
                <p class="lead">12-02-2019 to 25-02-2019</p>
              </div>
              <div class="col">
                <a href="#" class="btn btn-primary" >More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card px-lg-5 py-3 mb-3" style="width: 100%">
            <p class="h1">Experiences</p>
            <div class="row">
              <div class="col">
                <p class="h2">The Eiffel Tower</p>
              </div>
              <div class="col">
                <p class="lead">Level 6</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card px-lg-5 py-3 mb-3" style="width: 100%">
            <p class="h1">Ongoing Contracts</p>
            <div class="row">
              <div class="col">
                <p class="h2">You have no ongoing contracts</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</body>