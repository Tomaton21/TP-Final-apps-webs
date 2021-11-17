<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
    <title>Document</title>
    <?php
    include('../inc/grids.php');
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

        <form action="crearcompra-destino.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="produ" class="form-label">Producto</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="produ" name="produ">
                    <option selected disabled>Selecciona una condicion</option>
                    <?php
                        include('../inc/conexiondbusuario.php');
                        $consulta = "SELECT CodP, Nombre FROM `productos`";
                        $resultado3 = mysqli_query($conexion2,$consulta);
                        while($columna =mysqli_fetch_array($resultado3)){
                            echo '<option value="'.$columna['CodP'].'">'.$columna['Nombre'].'</option>';
                    }?>               
                </select>
            </div>
            <div class="col">
                <label for="prov" class="form-label">Proveedor</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="prov" name="prov">
                    <option selected disabled>Selecciona una condicion</option>
                    <?php
                        include('../inc/conexiondbusuario.php');
                        $consulta = "SELECT * FROM `vista_proveedores`";
                        $resultado3 = mysqli_query($conexion2,$consulta);
                        while($columna =mysqli_fetch_array($resultado3)){
                            echo '<option value="'.$columna['Nombre'].'">'.$columna['Nombre'].'</option>';
                    }?>               
                </select>
            </div>
            <div class="col">
            <label for="cant" class="form-label">Cantidad</label>
            <input type="number" class="form-control" id="cant" name="cant" min="1">
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success" name='boton' value=1>Modificar</button>
            </div>
            <div class="col">
            <button type="submit" class="btn btn-danger" name='boton' value=0>Cancelar</button> 
            </div>
            
        </div>
        <p><?php echo $mensaje ?></p>
        </form>
        <?php
                $o=1;
                gridCompras($o);
                 ?>
        </div>
        <div class="col-3"></div>
    </div>
</body>
</html>