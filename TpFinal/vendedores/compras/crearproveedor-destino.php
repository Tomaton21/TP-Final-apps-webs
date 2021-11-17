<?php
    include('../inc/conexiondbusuario.php');
    
    session_start();
    $_SESSION['nombre']= $_POST['nombre'];
    $_SESSION['cuit'] = $_POST['cuit'];
    $_SESSION['dir'] = $_POST['dir'];
    $_SESSION['loc']= $_POST['loc'];
    $_SESSION['tel']= $_POST['tel'];
    $_SESSION['condiva']= $_POST['condiva'];
    $_SESSION['boton']= $_POST['boton'];
    $boton= $_SESSION['boton'];
    $nombre = trim($_SESSION['nombre']," ");
    $cuit = trim($_SESSION['cuit']," ");
    $dir = trim($_SESSION['dir']," ");
    $loc = trim($_SESSION['loc']," ");
    $tel =  trim($_SESSION['tel']," ");
    $condiva = trim($_SESSION['condiva']," ");

    $consulta1 = "select count(distinct Nombre) as nuevo from proveedores where Nombre = '$nombre' ";
    $resultado1 = mysqli_query($conexion2,$consulta1);

    
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    
    // Estructura de decision
    if ($boton == 1) {
        $_SESSION['codp']= $_POST['codp'];
        $codp =  $_SESSION['codp'];
        $modificar = "UPDATE `proveedores` SET `CUIT`='$cuit',`CondiIVA`='$condiva',`Dirección`='$dir',`Localidad`='$loc',`Telefono`='$tel' WHERE idProveedor = '$codp'";
        $resultado_alta2 = mysqli_query($conexion2,$modificar);        
        header("Location: proveedores.php?o=1");
    }elseif ($boton == 2){
        if($existe ==1){
            header("Location: crearproveedor.php?mensaje=uno&disabled='.$boton.'");
        }else{
            $alta2 = "INSERT INTO `proveedores`(`Nombre`, `CUIT`, `CondiIVA`, `Dirección`, `Localidad`, `Telefono`) VALUES ('$nombre','$cuit','$condiva','$dir','$loc','$tel')";
            $altaok = mysqli_query($conexion2, $alta2);
            if ($resultado_alta2 = true) {
                
                echo $alta2;
                header("Location: proveedores.php?o=1");
            }    
            
            $_SESSION['loginok'] = 1;        
        }        
    }else {
        header("Location: proveedores.php?o=1");
    }
    
    
?>