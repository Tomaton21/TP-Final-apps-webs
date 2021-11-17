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
            $_SESSION['stock'] = $_GET['stock'];
            $_SESSION['costoIVA'] = $_GET['precioIVA'];
            $_SESSION['precioIVA'] = $_GET['costoIVA'];
            $_SESSION['idRubro'] = $_GET['idRubro'];

            $codp =  $_SESSION['codp'];
            $nombre = $_SESSION['nombre'];
            $stock = $_SESSION['stock'];
            $precioIVA = $_SESSION['precioIVA'];
            $costoIVA = $_SESSION['costoIVA'];
            $idRubro =  $_SESSION['idRubro'];
            ?>
            <div class="mb-3">
                <label for="codp" class="form-label">Codigo del producto</label>
                <input type="text" class="form-control" id="codp" name="codp" readonly value= <?php echo $codp ?> >
                
                
            </div>    
            <div class="mb-3">
                <label for="nombre" class="form-label">Ingrese el nombre del producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre" readonly value= <?php echo $nombre ?> >
                
                
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Ingrese el stock</label>
                <input type="number" class="form-control" id="stock" name="stock" value= <?php echo $stock ?>>
                
            </div>
            <div class="mb-3">
                <label for="precioIVA" class="form-label">Ingrese el precio con IVA</label>
                <input type="number" class="form-control" id="precioIVA" name="precioIVA" value= <?php echo $precioIVA ?>>
                
            </div>
            <div class="mb-3">
                <label for="costoIVA" class="form-label">Ingrese el costo con IVA</label>
                <input type="number" class="form-control" id="costoIVA" name="costoIVA" value= <?php echo $costoIVA ?>>
                
            </div>

            <div class="mb-3">
            <label for="rubro" class="form-label">Seleccione el rubro</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="rubro" name="rubro">
            <option selected disabled>Selecciona un rubro</option>
            <?php
                include('../inc/conexiondbusuario.php');
                $consulta = "SELECT * FROM `rubro`";
                $resultado3 = mysqli_query($conexion2,$consulta);
                while($columna =mysqli_fetch_array($resultado3)){
                    echo '<option value="'.$columna['idRubro'].'">'.$columna['NombreRubro'].'</option>';
                }?>         
            </select>
            </div>
            <button type="submit" class="btn btn-success" name='boton' value=1>Modificar</button>
            <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button>
            
        <?php   
        }else {  ?>            
            <div class="mb-3">
                <label for="nombre" class="form-label">Ingrese el nombre del producto</label>
                <input type="text" class="form-control" id="nombre" name="nombre">                
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Ingrese el stock</label>
                <input type="number" class="form-control" id="stock" name="stock">
                
            </div>
            <div class="mb-3">
                <label for="precioIVA" class="form-label">Ingrese el precio con IVA</label>
                <input type="number" class="form-control" id="precioIVA" name="precioIVA" min="1">
                
            </div>
            <div class="mb-3">
                <label for="costoIVA" class="form-label">Ingrese el costo con IVA</label>
                <input type="number" class="form-control" id="costoIVA" name="costoIVA" min="1">
                
            </div>

            <div class="mb-3">
            <label for="rubro" class="form-label">Ingrese el rubro</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="rubro" name="rubro">
            <option selected disabled>Selecciona un rubro</option>
            <?php
                include('../inc/conexiondbusuario.php');
                $consulta = "SELECT * FROM `rubro`";
                $resultado3 = mysqli_query($conexion2,$consulta);
                while($columna =mysqli_fetch_array($resultado3)){
                    echo '<option value="'.$columna['idRubro'].'">'.$columna['NombreRubro'].'</option>';
                }?>         
            </select>
            </div>
            <button type="submit" class="btn btn-success" name='boton' value=2>Crear Producto</button>
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

        <form action="crearproducto-destino.php" method="POST">
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