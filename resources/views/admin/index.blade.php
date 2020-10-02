@include('admin/header')
<div class="header">
    <img src="{{asset('portada.png')}}" style="height: 40%;">
</div>
@include('admin/nav-admin')
<div class="container">
    @yield('seccion_admin')
</div>