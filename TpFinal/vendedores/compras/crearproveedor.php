<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Document</title>
    <?php
    $_SESSION['disabled']=$_GET['disabled'];
    function modificar($disabled){
        if ($disabled == 1) {
            $_SESSION['disabled'] = 1;
            $_SESSION['codp'] = $_GET['codigo'];
            $_SESSION['nombre'] = $_GET['nombre'];
            $_SESSION['cuit'] = $_GET['CUIT'];
            $_SESSION['dir'] = $_GET['Direccion'];
            $_SESSION['loc'] = $_GET['Localidad'];
            $_SESSION['tel'] = $_GET['Telefono'];
            $_SESSION['condiva'] = $_GET['CondiIVA'];

            $codp =  $_SESSION['codp'];
            $nombre = $_SESSION['nombre'];
            $cuit = $_SESSION['cuit'];
            $dir = $_SESSION['dir'];
            $loc = $_SESSION['loc'];
            $tel =  $_SESSION['tel'];
            $condiva = $_SESSION['condiva'];
            ?>
            <div class="mb-3">
                <label for="codp" class="form-label">Codigo del proveedor</label>
                <input type="text" class="form-control" id="codp" name="codp" readonly value= <?php echo $codp ?> >
                
                
            </div>
            <div class="mb-3">
                <label for="nombre" class="form-label">Ingrese el nombre del proveedor</label>
                <input type="text" class="form-control" id="nombre" name="nombre" readonly value= <?php echo $nombre ?>>                
            </div>
            
            <div class="mb-3">
                <label for="cuit" class="form-label">Ingrese el CUIT</label>
                <input type="number" class="form-control" id="cuit" name="cuit" value= <?php echo $cuit ?>>
            </div>
            
            <label for="condiva" class="form-label">Ingrese la condicicion frente al IVA</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="condiva" name="condiva">
                <option selected disabled>Selecciona una condicion</option>
                <option value="responsable inscripto">Responsable Inscripto</option>
                <option value="monotributista">Monotributista</option>                
            </select>
            <div class="mb-3">
                <label for="dir" class="form-label">Ingrese la direccion</label>
                <input type="text" class="form-control" id="dir" name="dir" value= <?php echo $dir ?>>
            </div>
            <div class="mb-3">
                <label for="loc" class="form-label">Ingrese la localidad</label>
                <input type="text" class="form-control" id="loc" name="loc" value= <?php echo $loc ?>>
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Ingrese un telefono</label>
                <input type="number" class="form-control" id="tel" name="tel" value= <?php echo $tel ?>>
            </div>
            <button type="submit" class="btn btn-success" name='boton' value=1>Modificar</button>
            <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button>
            
        <?php   
        }else {  ?>            
            <div class="mb-3">
                <label for="nombre" class="form-label">Ingrese el nombre del proveedor</label>
                <input type="text" class="form-control" id="nombre" name="nombre">                
            </div>
            <div class="mb-3">
                <label for="cuit" class="form-label">Ingrese el CUIT</label>
                <input type="number" class="form-control" id="cuit" name="cuit">
            </div>
            <div class="mb-3">
            <label for="condiva" class="form-label">Ingrese la condicicion frente al IVA</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="condiva" name="condiva">
                <option selected disabled>Selecciona una condicion</option>
                <option value="responsable inscripto">Responsable Inscripto</option>
                <option value="monotributista">Monotributista</option>            
            </select>
            </div>
            <div class="mb-3">
                <label for="dir" class="form-label">Ingrese la direccion</label>
                <input type="text" class="form-control" id="dir" name="dir">
                
            </div>
            <div class="mb-3">
                <label for="loc" class="form-label">Ingrese la localidad</label>
                <input type="text" class="form-control" id="loc" name="loc">
                
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">Ingrese un telefono</label>
                <input type="number" class="form-control" id="tel" name="tel">
                
            </div>
            
            <button type="submit" class="btn btn-success" name='boton' value=2>Crear Proveedor</button>
            <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button>
            <?php   
        }

    }
    $mensaje = ' ';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'El producto ya existe';}
    }
    ?>
</head>
<body class="container-fluid">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<div class="row">
        <div class="col-3"></div>
        <div class="col-6">

        <form action="crearproveedor-destino.php" method="POST">
        <?php
        $disabled= $_SESSION['disabled'];
         modificar($disabled);
        ?>
        <p><?php echo $mensaje ?></p>
        </form>

        </div>
        <div class="col-3"></div>
    </div>
</body>
</html>