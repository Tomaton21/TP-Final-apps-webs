<?php 

    include('../inc/conexiondbusuario.php');
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    $boton = $_POST['boton'];
    session_start();
     
    $baja = "DELETE FROM `productos` WHERE `productos`.`CodP` = '$codigo'";
    if($boton==0){
        header("Location: productos.php?mensaje=uno&o=1");
    }else{
        if (! $resultado1 = mysqli_query($conexion2,$baja)) {
        header("Location: bajaproducto.php?mensaje=uno");
        }else {
            
    
            $resultado_baja = mysqli_query($conexion2,$baja);
            header("Location: productos.php?o=1");
        }
    }

?>