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
       </div>
      </div>
  </div>
@endsection