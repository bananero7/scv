<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';


$articulo = $_REQUEST['txtArticulo'];
$cliente = $_REQUEST['txtCliente'];
$cantidad = $_REQUEST['txtCantidad'];
$valarticulo = $_REQUEST['txtValorArt'];
$valventa = $_REQUEST['txtValorVe'];





//Insertar los datos del cliente
$sql = "UPDATE tbl_ventas
	SET articulo = '$articulo',
    cliente = '$cliente',
	cantidad  = '$cantidad',
	valarticulo = '$valarticulo', 
	valventa = '$valventa', 
 	f_modi = now(), 
 	u_modi = 'jagalindezc'  
WHERE articulo='$articulo' ";


if (mysqli_query($conn, $sql)) {
?>
    <script>
        alert('Registro Modificado');
        //window.location = "form_productos.php";
    </script>
<?php
    echo '$sql';
} else {
?>
    <script>
        alert('Error: No se pudo Modicar el registro ');
        //window.location = "form_productos.php";
    </script>
<?php
}
?>
<script>

</script>