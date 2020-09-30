@extends('pages/template')
@section('seccion')
<div class="row">
  <div class="leftcolumn">
  @foreach($noticias as $noticia)
      <div class="card">
      <div class="card-header">
        Noticias,{{$noticia->created_at}}
       </div>
       <div class="card-body">
        <h5 class="card-title">{{$noticia->titulo}}</h5>
            <p class="card-text">{{$noticia->descripcion}}</p>
          <div id="container">
          <button class="learn-more">
          <span class="circle" aria-hidden="true">
           <span class="icon arrow"></span>
          </span>
            <span class="button-text"><a href="{{route('noticias.show',$noticia)}}">Ver mas</a></span>
            </button>
        </div>
        </div>
      </div>
      @endforeach   
      <div class="custom-pagination-brand-blue">
          {{$noticias->links("pagination::bootstrap-4")}} 
      </div>
  </div>

  <div class="rightcolumn">
      <div class="card">
        <h2>Blog Personal</h2>
        <img src="{{asset('blog.jpeg')}}" id="blog-personal"> 
        <p>Sensei Cubas 4 dan de la federación y sus emprendimiento como Profesor.</p>
      </div>
    <div class="card">
      <h3>Auspiciantes</h3>
      @include('modules.view_uploads')
    </div>
    <div class="card">
      <h3>Redes Sociales</h3>
      <div id="net-social">
        <a href="https://www.facebook.com/SKIF-Karate-tradicional-Paraguay-2206812966296795/"><img src="{{asset('facebook.png')}}" style="with=10%"></a>
        <a href="https://www.instagram.com/juanr.cubas/?hl=es-la"><img src="{{asset('instagram.jpg')}}" style="with=10%"></a>
      </div>
    </div>
    </div>
  </div>
@endsection