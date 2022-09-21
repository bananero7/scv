<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';


$codigo = $_REQUEST['txtCodigo'];
$descripcion = $_REQUEST['txtDescripcion'];
$cantidad = $_REQUEST['txtCantidad'];
$stock = $_REQUEST['txtStock'];
$vunitario = $_REQUEST['txtValorUnitario'];
$rimagen = $_REQUEST['cboImagenes'];




//Insertar los datos del cliente
$sql = "UPDATE tbl_productos
	SET codigo = '$codigo',
    descripcion = '$descripcion',
	cantidad  = '$cantidad',
	stock = '$stock', 
	vunitario = '$vunitario',
	rimagen = '$rimagen', 
 	f_modi = now(), 
 	u_modi = 'jagalindezc'  
WHERE codigo='$codigo' ";


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