<?php
    include('../inc/conexiondbusuario.php');
    include('producto.php');
    
    session_start();
    $_SESSION['codp']= $_POST['codp'];
    $_SESSION['nombre']= $_POST['nombre'];
    $_SESSION['stock'] = $_POST['stock'];
    $_SESSION['precioIVA'] = $_POST['precioIVA'];
    $_SESSION['costoIVA']= $_POST['costoIVA'];
    $_SESSION['rubro']= $_POST['rubro'];
    $_SESSION['boton']= $_POST['boton'];
    $boton= $_SESSION['boton'];
    $codp=$_SESSION['codp'];
    $nombre=$_SESSION['nombre'];
    $stock= $_SESSION['stock'];
    $precioIVA=$_SESSION['precioIVA'];
    $precioSinIVA=($precioIVA - ($precioIVA * 0.21));
    $costoIVA=$_SESSION['costoIVA'];    
    $costoSinIVA=($costoIVA - ($costoIVA * 0.21));
    $idrubro=$_SESSION['rubro'];
    construcCrear($codp=$_SESSION['codp'], $nombre=$_SESSION['nombre'], $stock= $_SESSION['stock'], $precioIVA=$_SESSION['precioIVA'], $precioSinIVA=($precioIVA - ($precioIVA * 0.21)), $costoIVA=$_SESSION['costoIVA'], $costoSinIVA=($costoIVA - ($costoIVA * 0.21)), $idrubro=$_SESSION['rubro']);
    $consulta1 = "select count(distinct nombre) as nuevo from productos where nombre = '$nombre' ";
    $resultado1 = mysqli_query($conexion2,$consulta1);

    
    while($a = mysqli_fetch_assoc($resultado1)){
        $existe = $a['nuevo'];
    }
    
    // Estructura de decision
    if ($boton == 1) {
        $modificar = "update productos SET Stock = '$stock', PrecioSinIVA = '$precioSinIVA', PrecioIVA = '$precioIVA', CostoSinIVA = '$costoSinIVA', CostoIVA = '$costoIVA', idRubro = '$idrubro',Rubro = ' ' where CodP = '$codp'";
        $resultado_alta = mysqli_query($conexion2,$modificar);        
        header("Location: productos.php?o=1");
    }elseif ($boton == 2){
        if($existe ==1){
            header("Location: crearproducto.php?mensaje=uno&disabled='.$boton.'");
        }else{
            $alta = "INSERT INTO productos (`Nombre`, `Stock`, `PrecioSinIVA`, `PrecioIVA`, `CostoSinIVA`, `CostoIVA`, `idRubro`,`Rubro`) VALUES ('$nombre','$stock','$precioSinIVA','$precioIVA','$costoSinIVA','$costoIVA', '$idrubro','')";
            $resultado_alta = mysqli_query($conexion2,$alta);        
            header("Location: productos.php?o=1");
            $_SESSION['loginok'] = 1;        
        }        
    }else {
        header("Location: productos.php?o=1");
    }
    
    
?>