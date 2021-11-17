<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <title>login</title>
    <?php
    
    $mensaje = ' ';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='cero'){$mensaje = 'Datos erroneos vuelva a intentar';}
    }
    ?>
  </head>
  <body class="container-fluid">
    <!-- Titulo de la pagina -->
    <div class="alert bg-primary text-center" role="alert">
       <h3 class="text-center fst-italic">Ingrese al sistema</h3>
    </div>  

    <!-- Fila 1 -->
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">

        <form action="login-destino.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Ingrese su usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Ingrese su contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        <p><?php echo $mensaje ?>  </p>
        <button class="btn btn-primary bg-success"><a href="registrar.php" class="text-decoration-none" >Crear un nuevo usuario</a></button>
        
    
        </div>
        
    </div>
    <br> 

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="js/bootstrap.bundle.min.js"></script>

  </body>
</html>