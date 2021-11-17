<?php 

    include('../inc/conexiondbusuario.php');
    $codigo = $_POST['codigo'];
    $nombre = $_POST['nombre'];
    
    $boton = $_POST['boton'];
    session_start();
     
    $baja = "DELETE FROM `clientes` WHERE `clientes`.`idCliente` = '$codigo'";
    echo $baja;
    if($boton==0){
        header("Location: clientes.php?mensaje=uno&o=1");
    }else{
        if (! $resultado1 = mysqli_query($conexion2,$baja)) {
        header("Location: clientes.php?mensaje=uno");
        }else {
            $resultado_baja = mysqli_query($conexion2,$baja);
            header("Location: clientes.php?o=1");
        }
    }

?>