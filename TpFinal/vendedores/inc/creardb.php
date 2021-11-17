<?php
    include('conexionServidor.php'); 
    $basededatos = $_SESSION['usuario'];
    // Paso 3: Creo la db    
    if (mysql_query($conexion,"CREATE DATABASE '$basededatos'")){
    echo "Salio bien";
    
    $consulta1 = "CREATE TABLE `productos` ( `CodP` INT NOT NULL , `Nombre` VARCHAR(25) NOT NULL , `Stock` DECIMAL(10) NOT NULL , `PrecioSinIVA` DECIMAL(10) NOT NULL , `PrecioIVA` DECIMAL(10) NOT NULL , `CostoSinIVA` DECIMAL(10) NOT NULL , `CostoIVA` DECIMAL(10) NOT NULL , PRIMARY KEY (`CodP`), UNIQUE (`Nombre`)) ENGINE = InnoDB;";
    $consulta2 = "CREATE TABLE `rubro` ( `idRubro` INT NOT NULL , `NombreRubro` VARCHAR(25) NOT NULL , PRIMARY KEY (`idRubro`), UNIQUE (`NombreRubro`)) ENGINE = InnoDB;";
    $consulta3 = "CREATE TABLE `ventas` ( `idPedido` INT NOT NULL , `Cliente` VARCHAR(25) NOT NULL , `Fecha` DATETIME NOT NULL , `Subtotal` DECIMAL(10) NOT NULL , `Descuento` DECIMAL(10) NOT NULL , `Total` DECIMAL(10) NOT NULL , PRIMARY KEY (`idPedido`)) ENGINE = InnoDB;";
    $consulta4 = "CREATE TABLE `proveedores` ( `idProveedor` INT NOT NULL , `Nombre` VARCHAR(25) NOT NULL , `CUIT` INT(10) NOT NULL , `CondiIVA` VARCHAR(15) NOT NULL , `Dirección` VARCHAR(100) NOT NULL , `Localidad` VARCHAR(30) NOT NULL , `Telefono` INT(15) NOT NULL , PRIMARY KEY (`idProveedor`), UNIQUE (`Nombre`)) ENGINE = InnoDB;";
    $consulta5 = "CREATE TABLE `clientes` ( `idCliente` INT(10) NOT NULL , `Nombre` VARCHAR(25) NOT NULL , `DNI` INT(8) NOT NULL , `Descuento` DECIMAL(3) NOT NULL , PRIMARY KEY (`idCliente`), UNIQUE (`DNI`)) ENGINE = InnoDB;";
    $resultado1 = mysqli_query($conexion,$consulta1);
    $resultado2 = mysqli_query($conexion,$consulta2);
    $resultado3 = mysqli_query($conexion,$consulta3);
    $resultado4 = mysqli_query($conexion,$consulta4);
    $resultado5 = mysqli_query($conexion,$consulta5);
    }
    ?>