<?php
    include('../inc/conexiondbusuario.php');
    
    session_start();
    $_SESSION['nombre']= $_POST['nombre'];
    $_SESSION['cuit'] = $_POST['cuit'];
    $_SESSION['dir'] = $_POST['dir'];
    $_SESSION['desc']= $_POST['desc'];
    $_SESSION['condiva']= $_POST['condiva'];
    $_SESSION['boton']= $_POST['boton'];
    $boton= $_SESSION['boton'];
    $nombre = trim($_SESSION['nombre']," ");
    $cuit = $_SESSION['cuit'];
    $dir = trim($_SESSION['dir']," ");
    $desc = trim($_SESSION['desc']," ");
    $condiva = trim($_SESSION['condiva']," ");
    echo $cuit;
    $consulta1 = "select count(distinct Nombre) as nuevo from clientes where Nombre = '$nombre' ";
    $resultado1 = mysqli_query($conexion2,$consulta1);

    
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    
    // Estructura de decision
    if ($boton == 1) {
        $_SESSION['codp']= $_POST['codp'];
        $codp =  $_SESSION['codp'];
        echo $cuit;
        $modificar = "UPDATE `idCliente` SET `DNI/CUIT`='$cuit',`CondIVA`='$condiva',`Dirección`='$dir',`Descuento`='$desc' WHERE idCliente = '$codp'";
        $resultado_alta2 = mysqli_query($conexion2,$modificar);        
        //header("Location: clientes.php?o=1");
    }elseif ($boton == 2){
        if($existe ==1){
            //header("Location: crearcliente.php?mensaje=uno&disabled='.$boton.'");
        }else{$alta2 = "INSERT INTO `clientes`(`Nombre`, `DNI/CUIT`, `CondIVA`, `Descuento`, `Dirección`) VALUES ('$nombre','$cuit','$condiva','$desc','$dir')";
            $altaok = mysqli_query($conexion2, $alta2);
            if ($resultado_alta2 = true) {
                
                
                //header("Location: clientes.php?o=1");
            }    
            
            $_SESSION['loginok'] = 1;        
        }        
    }else {
        header("Location: clientes.php?o=1");
    }
    
    
?>