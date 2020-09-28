@extends('pages/template')
@section('seccion')
<div class="about-section" id="about-id">
<h2 style="text-align:center">Nuestro Equipo</h2>
<div class="row" id='column-id'>
  <div class="column">
    <div class="card">
    <img src="{{asset('juan.jpg')}}" id="card-targets">
      <div class="container">
        <h2>Juan R. Cubas</h2>
        <p class="title">Presidente y Fundador</p>
        <p>2000, CEO</p>
        <p>juan@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="{{asset('norma.jpg')}}"  id="card-targets"> 
      <div class="container">
        <h2>Norma</h2>
        <p class="title">Directora Seda Poty</p>
        <p>2000, CEO </p>
        <p>norma@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
    <img src="{{asset('build-page.jpg')}}" id="card-targets"> 
      <div class="container">
        <h2>Juanito Perez</h2>
        <p class="title">Secretario</p>
        <p>Secretario Financiero</p>
        <p>juanito@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
@endsection