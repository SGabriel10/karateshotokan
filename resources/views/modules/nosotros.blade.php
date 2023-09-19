@extends('pages/template')
@section('seccion')
<div class="about-section">
<h2 style="text-align:center">Nuestro Equipo</h2>
<div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="{{asset('juan.jpg')}}" alt="Card image cap" height="300" width="200">
    <div class="card-body">
      <h5 class="card-title">Juan R. Cubas</h5>
      <p class="card-text">2000, CEO</p>
      <p class="card-text"><small class="text-muted">juan@example.com</small></p>
      <p><button class="button">Contacto</button></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="{{asset('norma.jpg')}}" alt="Card image cap" height="300" width="200">
    <div class="card-body">
      <h5 class="card-title">Norma Krug</h5>
      <p class="card-text">Fundadora de Danza Reseda Poty</p>
      <p class="card-text"><small class="text-muted">norma@example.com</small></p>
      <p><button class="button">Contacto</button></p>
    </div>
  </div>
</div>
@endsection