
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/noticias">Noticias</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/publicidades">Publicidad</a>
      </li>

      <li class="nav-item">
        <form action="/logout" method= "POST">
            {{ csrf_field() }}
          <a href="#" class="nav-link" onClick="this.closest('form').submit()">Cerrar Sesion</a>
        </form>
      </li>
    </ul>
  </div>
  </nav>