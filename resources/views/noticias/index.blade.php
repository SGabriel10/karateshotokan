
@extends('admin/header')
@section('seccion')
@include('noticias/new')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titulo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($noticias as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->titulo}}</td>
      <td>{{$item->descripcion}}</td>
      <td>
            <button><a href="{{route('noticias.edit',$item)}}">Actualizar</a></button>
            <form action="{{route('noticias.eliminar',$item)}}" method="POST" class="d-inline">
            {{method_field('DELETE')}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <button type="submit">Eliminar</button>
            </form>
      </td>
    </tr>
    <tr>
  @endforeach
  </tbody>
</table>
@endsection