<?php 
function navbar(){?>
<ul class="nav nav-tabs nav-justified">
    <li>
        <a class="navbar-brand" href="../panelusuario/panelUsuario.php">
            <img src="/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24" class="d-inline-block align-text-top">
            Proyecto
        </a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Ventas</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="../clientes/clientes.php?o=1">Cliente</a></li>
      <li><a class="dropdown-item" href="../clientes/historialpedidos.php?o=1">Historial de pedidos</a></li>
    </ul>
  </li>
  <li class="nav-item dropdown selected">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Compras</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="../compras/proveedores.php?o=1">Proveedores</a> </li>      
      <li><a class="dropdown-item" href="../compras/historialcompras.php?o=1">Historial orden de compra</a></li>
      <li><a class="dropdown-item" href="../compras/crearcompra.php?o=1">Crear orden de compra</a></li>
    </ul>
  </li>

  
  <li class="nav-item dropdown">    
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
    <ul class="dropdown-menu">      
      <li><?php echo '<a class="dropdown-item"  href="../productos/crearproducto.php?disabled=0">Crear Productos</a>'?></li>
      <li><a class="dropdown-item" href="../productos/productos.php?o=1">Listar Productos<?php $i=1 ?></a></li>
    </ul>
  </li>
  <li>
        <a class="navbar-brand" href="../../index.php">Cerrar sesion <?php session_destroy() ?> </a>
  </li>
  
  </ul>
<?php
 }



function navbarindex(){?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" href="login/login.php">Logearse</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
 }
?>

