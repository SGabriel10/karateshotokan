
<div class="container-fluid">
    <div class="row justify-content-center">
        <h2 class="card-header w-100 m-1 text-center">Subir Imagen</h2>
    </div>
    <div class="row justify-content-center">
        <form class="m-2" method="POST" action="{{route('publice.post_imagen')}}" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="form-group">
             <label for="name">Nombre</label>
                <input type="text" class="form-control" id="name" placeholder="Ingrese el nombre del archivo" name="name">
            </div>
            <div class="form-group">
                <label for="image">Elige la imagen</label>
                <input id="image" type="file" name="image">
            </div>
            <button type="submit" class="btn btn-dark d-block w-75 mx-auto">Subir imagen</button>
        </form>
    </div>
</div>