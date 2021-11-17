<?php
    include('../inc/conexion.php');
    conectarUsuarios();
    
    session_start();

    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña']= $_POST['contraseña'];
    $_SESSION['rol'] = $_POST['rol'];
    $user=$_SESSION['usuario'];
    $contraseña= $_SESSION['contraseña'];
    $rol=$_SESSION['rol'];
    

    $consulta1 = "select count(distinct usuario) as nuevo from usuarios where usuario = '$user' ";
    $resultado1 = mysqli_query($conexion,$consulta1);

    
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    

    // Estructura de decision
    if($existe==1){
        if (condition) {
            # code...
        }else {
            header("Location: registrar.php?mensaje=uno");
        }
    }else{
        
        $alta = "INSERT INTO usuarios (`Usuario`, `Contraseña`, `Rol`) VALUES ('$user','$contraseña','$rol')";
        $resultado_alta = mysqli_query($conexion,$alta);        
        include('../inc/creardb.php');
        
        header("Location: panelUsuario.php");
        
        $_SESSION['loginok'] = 1;
                            
    }
?>