@extends('admin.index')
@section('seccion_admin')
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
@include('publicidad.upload')
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
@foreach($imagenes as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>{{$item->url}}</td>
      <td>
            <form action="{{route('publicidad.eliminar',$item)}}" method="POST" class="d-inline">
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