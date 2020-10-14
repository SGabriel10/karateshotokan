<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link  href="\css\estilos.css" rel="stylesheet" type="text/css">
  <link  href="\css\fake.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/814e2acb91.js" crossorigin="anonymous"></script>
  <script type = 'text/javascript' src = "\js\fake.js"></script>
</head>
<body>
<div class="header">
    <img src="{{asset('portada.png')}}" style="height: 40%;">
</div>
@include('modules/nav-bar')
<div class="container">
      @yield('seccion')
</div>
<div class="footer">
  <h3><p>&copy; 2020 SGabriel<p></h3>
</div>
</body>
</html>
