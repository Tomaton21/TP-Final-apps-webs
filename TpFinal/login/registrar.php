<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Document</title>
    <?php    
    $mensaje = ' ';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'El usuario ya existe';}
      if($_GET['mensaje']=='dos'){$mensaje = 'Ingrese un nombre valido';}
      if($_GET['mensaje']=='tres'){$mensaje = 'Imposible crear base de datos';}
    }
    ?>
</head>
<body class="container-fluid">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="row">
        <div class="col-3"></div>
        <div class="col-6">

        <form action="registro-destino.php" method="POST">
            <div class="mb-3">
                <label for="usuario" class="form-label">Ingrese su usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario">
                
            </div>
            <div class="mb-3">
                <label for="contraseña" class="form-label">Ingrese su contraseña</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña">
            </div>
            <div class="mb-3">
            <label for="rol" class="form-label">Ingrese el rol</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="rol" name="rol">
                <option selected disabled>Selecciona un rol</option>
                <option value="administrador">Administrador</option>
                <option value="vendedor">Vendedor</option>
                <option value="usuario">Usuario</option>                 
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
            <p><?php echo $mensaje ?></p>
        </form>

        </div>
        <div class="col-3"></div>
    </div>
</body>
</html>