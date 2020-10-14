@extends('pages/template')
@section('seccion')
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
@endsection