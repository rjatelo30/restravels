<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="stylesheet" href="{{ asset('css/app.css') }}">
 <title>Document</title>
</head>
<body>
 @include('inc.navbar')

 <img src="{{ asset('images/Travel.png') }}" alt="Aspera Travels Logo" width="100%" id="">

 <div class="container-fluid">
  <div class="row jumbotron">
  <div class="row">
  <div class="col-6">
   <p class="lead">We offer world class service <br> with top tier experiences</p>
  </div>
  <div class="col-6 mt-4">
  <p class="h6">At Aspera Tours & Travel we have luxury vehicles that will make your occasion truly special. With Aspera Tours & Travel, you are assured of a courteous and friendly service. With many years of experience in this field, we have earned a reputation for providing quality work.
  We also provide a choice of vehicles to suit your needs.</p>

  <p>Visit or services <a href="{{ url('/services') }}">Services</a> page to get started</p>
  </div>
  </div>
  </div>
 </div>

 @include('inc.footer')
</body>
</html>