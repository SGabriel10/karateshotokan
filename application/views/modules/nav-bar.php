
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  
  <a class="navbar-brand" href="<?php echo site_url()?>">Inicio</a>

 <!-- Dropdown -->
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
          Dojos
        </a>
        <ul class="dropdown-menu">
          <a class="dropdown-item" href="<?php echo site_url('/working') ?>">Dojos Asociados</a>
        </ul>
      </li>
    </ul>

  <!-- Links -->

  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href ="<?php echo site_url("/nosotros"); ?>">Nosotros</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo site_url('/contactos') ?>">Contactenos</a>
    </li>

  </ul>

     
</nav>