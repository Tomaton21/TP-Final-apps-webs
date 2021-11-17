<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Panel Usuario</title>
    <link href="inc/javascript.js">
    <?php
    session_start();
    include("../inc/grids.php");
    include("../inc/nav.php");
    $mensaje = ' ';
    if(isset($_GET['mensaje'])){
      if($_GET['mensaje']=='uno'){$mensaje = 'Error al borrar el producto';}
    }
    ?>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<?php
    navbar();
    $_SESSION['o']=$_GET['o'];
    $o=$_SESSION['o'];
    gridProductos($o);
?>
<p><?php echo $mensaje ?>  </p>


</body>
</html>