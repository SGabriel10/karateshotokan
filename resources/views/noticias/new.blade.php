
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
<form action="{{route('noticias.post_notice')}}" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
 
    <input type="text" name="titulo" placeholder="titulo" class="form-control mb-2">

    <textarea name="descripcion" placeholder="breve noticia" cols="30" rows="10" class="form-control mb-2">
    </textarea>
    <button class="btn btn-primary btn-block" type="submit">Publicar noticia</button>
</form>
