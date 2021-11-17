<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <!-- Archivos a incluir -->
    <?php 
      //include('inc/menu.php');  
      include('../inc/conexiondbusuario.php');
    ?>

    <!-- Trabajo con BDD -->
    <?php
    // Mensaje
    
    $nombre = $_GET['nombre'];
    $codigo = $_GET['codigo'];
    $mensaje = " ";
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'Error al borrar el producto de la base de datos';}
    };


    ?>


    <title>Baja de Producto</title>
  </head>
  <body class="container-fluid">   
    <!-- Título de la página -->
    <div class="alert alert-dark text-center fst-italic" role="alert">
        <h3>Baja de usuario</h3>
    </div>
    <br>

    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

            <form action="bajaproducto-destino.php" method="POST">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Producto a borrar</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value=<?php echo $nombre ?>>
                </div>
                <div class="mb-3">
                    <label for="codigo" class="form-label">Codigo del producto</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" value=<?php echo $codigo ?>>
                </div>            
                
                <button type="submit" class="btn btn-success" name='boton' value=1>Eliminar</button>
                <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button>
            </form>
            <br>
            <p> <?php echo $mensaje; ?> </p>   

        </div>
        <div class="col-3"></div>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>