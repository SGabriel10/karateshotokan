@extends('admin/header')
@section('seccion')
@if(session('mensaje'))
<div class="alert alert-success">
    {{session('mensaje')}}
</div>
@endif
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('noticias.update', $notice->id)}}" method="POST">
    {{ method_field('PUT')}}  
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
    <input type="text" name="titulo" placeholder="titulo" class="form-control mb-2" value="{{$notice->titulo}}">
    <textarea name="descripcion" cols="30" rows="10" class="form-control mb-2" value="{{$notice->descripcion}}">
    </textarea>
    <button class="btn btn-primary btn-block" type="submit">Editar noticia</button>
</form>
@endsection