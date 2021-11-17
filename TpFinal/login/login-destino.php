<?php    
include('inc/conexion.php');
session_start();
    $_SESSION['usuario'] = $_POST['usuario'];
    $_SESSION['contraseña'] = $_POST['contraseña'];
    $user=$_SESSION['usuario'];
    $contraseña= $_SESSION['contraseña'];
    $consulta1 = "select count(distinct usuario) as nuevo from usuarios where usuario = '$user' and contraseña= '$contraseña' ";
    $resultado1 = mysqli_query($conexion,$consulta1);
    $consulta2 = "select Rol from usuarios where usuario = '$user'";
    $resultado2 = mysqli_query($conexion, $consulta2);
    $rol =mysqli_fetch_array($resultado2);
    echo $rol['Rol'];
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    if ($existe==1 and $rol['Rol'] == 'vendedor' ) {
        $_SESSION['loginok'] = 1;
        header("Location: ../vendedores/panelusuario/panelUsuario.php");
    }elseif ($existe==1 and $rol['Rol'] == 'usuario' ) {
        $_SESSION['loginok'] = 1;
        header("Location: ../index.php");
    }else {        
        $_SESSION['loginok'] = 0;
    header("Location: login.php?mensaje=cero");
    }
?>