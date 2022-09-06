<html>
@include('pages/header')
<body>
<div class="header">
    <img src="{{asset('portada.png')}}" style="height: 40%;">
</div>
@include('modules/nav-bar')
<div class="container">
      @yield('seccion')
</div>
@include('pages/footer')
</body>
</html>
