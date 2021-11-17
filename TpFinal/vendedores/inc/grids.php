<?php    
    Function gridProductos($o){
        include('../inc/conexiondbusuario.php');
        $consulta = "select count(distinct nombre) as productos from productos";
        

        $resultado = mysqli_query($conexion2,$consulta);
        //$resultado1 = mysqli_query($conexion,$consulta1);

        
        while($fila = mysqli_fetch_assoc($resultado)){
            $prodctos_total = $fila['productos'];
        }
        function mostrarGrid($resultado3){
            while($columna =mysqli_fetch_array($resultado3)){
                echo "<tr>";
                    echo "<td>".$columna['CodP']."</td>";
                    echo "<td>".$columna['Nombre']."</td>";
                    echo "<td>".$columna['Stock']."</td>";;
                    echo "<td>".$columna['PrecioSinIVA']."</td>";
                    echo "<td>".$columna['PrecioIVA']."</td>";
                    echo "<td>".$columna['CostoSinIVA']."</td>";
                    echo "<td>".$columna['CostoIVA']."</td>";
                    echo "<td>".$columna['idRubro']."</td>";
                    echo "<td>".$columna['Rubro']."</td>";
                    echo '<td>
                            <a href="crearproducto.php?disabled='.true.'&codigo='.$columna['CodP'].'&nombre='.$columna['Nombre'].'&stock='.$columna['Stock'].'&precioIVA='.$columna['PrecioIVA'].'&costoIVA='.$columna['CostoIVA'].'&Rubro='.$columna['Rubro'].'">Modificar</a>
                            
                            <a href="bajaproducto.php?codigo='.$columna['CodP'].'&nombre='.$columna['Nombre'].'">Eliminar</a>
                          </td>';
                echo "</tr>";
        }
    }
        function ordenarGrid($o){
            include('../inc/conexiondbusuario.php');
            switch ($o) {
                case 1:
                    $consulta = "select distinct * from productos";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 2:
                    $consulta = "select distinct * from productos order by Nombre";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 3:
                    $consulta = "select distinct * from productos order by Stock";                    
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 4:
                    $consulta = "select distinct * from productos order by precioSinIVA";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 5:
                    $consulta = "select distinct * from productos order by precioIVA";  
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 6:
                    $consulta = "select distinct * from productos order by costoSinIVA"; 
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 7:
                    $consulta = "select distinct * from productos order by costoIVA";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 8:
                    $consulta = "select distinct * from productos order by IdRubro";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                case 8:
                    $consulta = "select distinct * from productos order by Rubro";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGrid($resultado3);
                    break;
                default:
                    
                    break;
            }
        }
?>
  <div class="row">
  <div class="row">
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Productos totales: <?php echo $prodctos_total;  ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary" ><a href="productos.php">Ordenar por Precio</a> <?php   ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary">Ordenar por Costo <?php   ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-success">
                <?php echo '<a href="crearproducto.php?disabled='. 0 .'">Nuevo Producto</a>'?>                    
                </button>
            </div>
        </div>
    </div><br>
        <div class="col-2"></div>
        <div class="col-8">

        <div class="table-responsive">
        <table class="table table-bordered table-sm table-hover table-dark" >
            <thead>
                <tr class="text-center">
                    <td><a href="productos.php?o=1">Codigo</a></tp>
                    <td><a href="productos.php?o=2">Nombre</a></td>
                    <td><a href="productos.php?o=3">Stock</a></td>
                    <td><a href="productos.php?o=4">Precio Sin IVA</a></td>                    
                    <td><a href="productos.php?o=5">PrecioIVA</a></td>
                    <td><a href="productos.php?o=6">Costo Sin IVA</a></td>
                    <td><a href="productos.php?o=7">CostoIVA</a></td>
                    <td><a href="productos.php?o=8">idRubro</a></td>
                    <td><a href="productos.php?o=9">Rubro</a></td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                ordenarGrid($o);
                ?>
            </tbody>
        </table>
    </div>

        </div>
        <div class="col-2"></div>
    </div>
    
<?php
    }   
    Function gridClientes($o){
        include('../inc/conexiondbusuario.php');
        $consulta = "select count(distinct nombre) as cliente from clientes";
        

        $resultado = mysqli_query($conexion2,$consulta);
        //$resultado1 = mysqli_query($conexion,$consulta1);

        
        while($fila = mysqli_fetch_assoc($resultado)){
            $clientes_total = $fila['cliente'];
        }
        function mostrarGridClientes($resultado3){
            while($columna =mysqli_fetch_array($resultado3)){
                echo "<tr>";
                    echo "<td>".$columna['idCliente']."</td>";
                    echo "<td>".$columna['Nombre']."</td>";
                    echo "<td>".$columna['DNI/CUIT']."</td>";;
                    echo "<td>".$columna['CondIVA']."</td>";
                    echo "<td>".$columna['Descuento']."</td>";
                    echo "<td>".$columna['Dirección']."</td>";
                    echo '<td>
                            <a href="crearcliente.php?disabled='.true.'&codigo='.$columna['idCliente'].'&nombre='.$columna['Nombre'].'&CUIT='.$columna['DNI/CUIT'].'&CondiIVA='.$columna['CondIVA'].'&Direccion='.$columna['Dirección'].'&Descuento='.$columna['Descuento'].'">Modificar</a>
                            
                            <a href="bajacliente.php?codigo='.$columna['idCliente'].'&nombre='.$columna['Nombre'].'">Eliminar</a>
                          </td>';
                echo "</tr>";
        }
    }
        function ordenarGridClientes($o){
            include('../inc/conexiondbusuario.php');
            switch ($o) {
                case 1:
                    $consulta = "select distinct * from clientes";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridClientes($resultado3);
                    break;
                case 2:
                    $consulta = "select distinct * from clientes order by Nombre";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridClientes($resultado3);
                    break;
                case 3:
                    $consulta = "select distinct * from clientes order by CUIT";                    
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridClientes($resultado3);
                    break;
                case 4:
                    $consulta = "select distinct * from clientes order by CondiIVA";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridClientes($resultado3);
                    break;
                case 5:
                    $consulta = "select distinct * from clientes order by Descuento";  
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridClientes($resultado3);
                    break;
                case 6:
                    $consulta = "select distinct * from clientes order by Dirección"; 
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridClientes($resultado3);
                    break;
                default:
                    
                    break;
            }
        }
?>
  <div class="row">
  <div class="row">
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Clientes totales: <?php echo $clientes_total;  ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary" ><a href="clientes.php">Ordenar por Precio</a> <?php   ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary">Ordenar por Costo <?php   ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-success">
                <?php echo '<a href="crearcliente.php?disabled='. 0 .'">Nuevo cliente</a>'?>                    
                </button>
            </div>
        </div>
    </div><br>
        <div class="col-2"></div>
        <div class="col-8">

        <div class="table-responsive">
        <table class="table table-bordered table-sm table-hover table-dark" >
            <thead>
                <tr class="text-center">
                    <td><a href="clientes.php?o=1">Codigo</a></tp>
                    <td><a href="clientes.php?o=2">Cliente</a></td>
                    <td><a href="clientes.php?o=3">Cuit</a></td>
                    <td><a href="clientes.php?o=4">Condicion IVA</a></td>                    
                    <td><a href="clientes.php?o=5">Dirección</a></td>
                    <td><a href="clientes.php?o=6">Dirección</a></td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                ordenarGridClientes($o);
                ?>
            </tbody>
        </table>
    </div>

        </div>
        <div class="col-2"></div>
    </div>
    
<?php
    }    
Function gridCompras($o){
    include('../inc/conexiondbusuario.php');
    $consulta = "select count(distinct idPedido) as compra from compras";
    

    $resultado = mysqli_query($conexion2,$consulta);
    //$resultado1 = mysqli_query($conexion,$consulta1);

    
    while($fila = mysqli_fetch_assoc($resultado)){
        $compras_total = $fila['compra'];
    }
    function mostrarGridCompras($resultado3){
        while($columna =mysqli_fetch_array($resultado3)){
            echo "<tr>";
                echo "<td>".$columna['idPedido']."</td>";
                echo "<td>".$columna['Proveedor']."</td>";
                echo "<td>".$columna['Fecha']."</td>";;
                echo "<td>".$columna['Subtotal']."</td>";
                echo "<td>".$columna['Descuento']."</td>";
                echo "<td>".$columna['Total']."</td>";
                
            echo "</tr>";
    }
}
    function ordenarGridCompras($o){
        include('../inc/conexiondbusuario.php');
        switch ($o) {
            case 1:
                $consulta = "select distinct * from compras";
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridCompras($resultado3);
                break;
            case 2:
                $consulta = "select distinct * from compras order by Proveedor";
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridCompras($resultado3);
                break;
            case 3:
                $consulta = "select distinct * from compras order by Fecha";                    
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridCompras($resultado3);
                break;
            case 4:
                $consulta = "select distinct * from compras order by Subtotal";
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridCompras($resultado3);
                break;
            case 5:
                $consulta = "select distinct * from compras order by Descuento";  
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridCompras($resultado3);
                break;
            case 6:
                $consulta = "select distinct * from compras order by Total"; 
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridCompras($resultado3);
                break;
            default:
                
                break;
        }
    }
?>
<div class="row">
<div class="row">
    <div class="col-3">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary">Compras totales: <?php echo $compras_total;  ?></button>
        </div>
    </div>
    <div class="col-3">
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-primary" ><a href="clientes.php">Ordenar por Precio</a> <?php   ?></button>
        </div>
    </div>
    <div class="col-3">
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-primary">Ordenar por Costo <?php   ?></button>
        </div>
    </div>
    <div class="col-3">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-success">
            <?php echo '<a href="crearcliente.php?disabled='. 0 .'">Nuevo cliente</a>'?>               
            </button>
        </div>
    </div>
</div><br>
    <div class="col-2"></div>
    <div class="col-8">

    <div class="table-responsive">
    <table class="table table-bordered table-sm table-hover table-dark" >
        <thead>
            <tr class="text-center">
                <td><a href="clientes.php?o=1">Codigo</a></tp>
                <td><a href="clientes.php?o=2">Proveedor</a></td>
                <td><a href="clientes.php?o=3">Fecha</a></td>
                <td><a href="clientes.php?o=4">Subtotal</a></td>                    
                <td><a href="clientes.php?o=5">Descuento</a></td>
                <td><a href="clientes.php?o=6">Total</a></td>
                <td><a href="clientes.php?o=6">Detalle</a></td>
            </tr>
        </thead>
        <tbody>
            <?php
            ordenarGridCompras($o);
            ?>
        </tbody>
    </table>
</div>

    </div>
    <div class="col-2"></div>
</div>

<?php
}
Function gridVentas($o){
    include('../inc/conexiondbusuario.php');
    $consulta = "select count(distinct idPedido) as venta from ventas";
    

    $resultado = mysqli_query($conexion2,$consulta);
    //$resultado1 = mysqli_query($conexion,$consulta1);

    
    while($fila = mysqli_fetch_assoc($resultado)){
        $ventas_total = $fila['venta'];
    }
    function mostrarGridVentas($resultado3){
        while($columna =mysqli_fetch_array($resultado3)){
            echo "<tr>";
                echo "<td>".$columna['idPedido']."</td>";
                echo "<td>".$columna['Cliente']."</td>";
                echo "<td>".$columna['Fecha']."</td>";;
                echo "<td>".$columna['Subtotal']."</td>";
                echo "<td>".$columna['Descuento']."</td>";
                echo "<td>".$columna['Total']."</td>";
                
            echo "</tr>";
    }
}
    function ordenarGridVentas($o){
        include('../inc/conexiondbusuario.php');
        switch ($o) {
            case 1:
                $consulta = "select distinct * from ventas";
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridVentas($resultado3);
                break;
            case 2:
                $consulta = "select distinct * from ventas order by Cliente";
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridVentas($resultado3);
                break;
            case 3:
                $consulta = "select distinct * from ventas order by Fecha";                    
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridVentas($resultado3);
                break;
            case 4:
                $consulta = "select distinct * from ventas order by Subtotal";
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridVentas($resultado3);
                break;
            case 5:
                $consulta = "select distinct * from ventas order by Descuento";  
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridVentas($resultado3);
                break;
            case 6:
                $consulta = "select distinct * from ventas order by Total"; 
                $resultado3 = mysqli_query($conexion2,$consulta);
                mostrarGridVentas($resultado3);
                break;
            default:
                
                break;
        }
    }
?>
<div class="row">
<div class="row">
    <div class="col">
        <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary">Ventas totales: <?php echo $ventas_total;  ?></button>
        </div>
    </div>
    <div class="col">
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-primary" ><a href="clientes.php">Ordenar por Precio</a> <?php   ?></button>
        </div>
    </div>
    <div class="col">
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-primary">Ordenar por Costo <?php   ?></button>
        </div>
    </div>
</div><br>
    <div class="col-2"></div>
    <div class="col-8">

    <div class="table-responsive">
    <table class="table table-bordered table-sm table-hover table-dark" >
        <thead>
            <tr class="text-center">
                <td><a href="clientes.php?o=1">Codigo</a></tp>
                <td><a href="clientes.php?o=2">Cliente</a></td>
                <td><a href="clientes.php?o=3">Fecha</a></td>
                <td><a href="clientes.php?o=4">Subtotal</a></td>                    
                <td><a href="clientes.php?o=5">Descuento</a></td>
                <td><a href="clientes.php?o=6">Total</a></td>
                <td><a href="clientes.php?o=6">Detalle</a></td>
            </tr>
        </thead>
        <tbody>
            <?php
            ordenarGridVentas($o);
            ?>
        </tbody>
    </table>
</div>

    </div>
    <div class="col-2"></div>
</div>

<?php
}
?>
?>
<?php    
    Function gridProovedores($o){
        include('../inc/conexiondbusuario.php');
        $consulta = "select count(distinct nombre) as proveedor from proveedores";
        

        $resultado = mysqli_query($conexion2,$consulta);
        //$resultado1 = mysqli_query($conexion,$consulta1);

        
        while($fila = mysqli_fetch_assoc($resultado)){
            $proveedor_total = $fila['proveedor'];
        }
        function mostrarGridProveedor($resultado3){
            while($columna =mysqli_fetch_array($resultado3)){
                echo "<tr>";
                    echo "<td>".$columna['idProveedor']."</td>";
                    echo "<td>".$columna['Nombre']."</td>";
                    echo "<td>".$columna['CUIT']."</td>";;
                    echo "<td>".$columna['CondiIVA']."</td>";
                    echo "<td>".$columna['Dirección']."</td>";
                    echo "<td>".$columna['Localidad']."</td>";
                    echo "<td>".$columna['Telefono']."</td>";
                    echo '<td>
                            <a href="crearproveedor.php?disabled='.true.'&codigo='.$columna['idProveedor'].'&nombre='.$columna['Nombre'].'&CUIT='.$columna['CUIT'].'&CondiIVA='.$columna['CondiIVA'].'&Direccion='.$columna['Dirección'].'&Localidad='.$columna['Localidad'].'&Telefono='.$columna['Telefono'].'">Modificar</a>
                            
                            <a href="bajaproveedor.php?codigo='.$columna['idProveedor'].'&nombre='.$columna['Nombre'].'">Eliminar</a>
                          </td>';
                echo "</tr>";
        }
    }
        function ordenarGridProveedor($o){
            include('../inc/conexiondbusuario.php');
            switch ($o) {
                case 1:
                    $consulta = "select distinct * from proveedores";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                case 2:
                    $consulta = "select distinct * from proveedores order by Nombre";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                case 3:
                    $consulta = "select distinct * from proveedores order by CUIT";                    
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                case 4:
                    $consulta = "select distinct * from proveedores order by CondiIVA";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                case 5:
                    $consulta = "select distinct * from proveedores order by Dirección";  
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                case 6:
                    $consulta = "select distinct * from proveedores order by Localidad"; 
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                case 7:
                    $consulta = "select distinct * from proveedores order by Telefono";
                    $resultado3 = mysqli_query($conexion2,$consulta);
                    mostrarGridProveedor($resultado3);
                    break;
                default:
                    
                    break;
            }
        }
?>
  <div class="row">
  <div class="row">
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-primary">Proveedores totales: <?php echo $proveedor_total;  ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary" ><a href="proveedores.php">Ordenar por Precio</a> <?php   ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
            <button type="button" class="btn btn-outline-primary">Ordenar por Costo <?php   ?></button>
            </div>
        </div>
        <div class="col-3">
            <div class="d-grid gap-2">
                <button type="button" class="btn btn-outline-success">
                <?php echo '<a href="crearproveedor.php?disabled='. 0 .'">Nuevo Proveedor</a>'?>                    
                </button>
            </div>
        </div>
    </div><br>
        <div class="col-2"></div>
        <div class="col-8">

        <div class="table-responsive">
        <table class="table table-bordered table-sm table-hover table-dark" >
            <thead>
                <tr class="text-center">
                    <td><a href="proveedores.php?o=1">Codigo</a></tp>
                    <td><a href="proveedores.php?o=2">Proveedor</a></td>
                    <td><a href="proveedores.php?o=3">Cuit</a></td>
                    <td><a href="proveedores.php?o=4">CondiIVA</a></td>                    
                    <td><a href="proveedores.php?o=5">Dirección</a></td>
                    <td><a href="proveedores.php?o=6">Localidad</a></td>
                    <td><a href="proveedores.php?o=7">Telefono</a></td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                <?php
                ordenarGridProveedor($o);
                ?>
            </tbody>
        </table>
    </div>

        </div>
        <div class="col-2"></div>
    </div>
    
<?php
    }
?>