<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/814e2acb91.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/estilos.css') }}">
    <style>
        form{
            margin-top:30px;
        }
    </style>
</head>
<body>
<div class="header">
    <img src="{{asset('portada.png')}}" style="height: 50%;">
</div>
@include('admin/nav-admin')
<div class="container">
      @yield('seccion')
</div>
</body>
</html>