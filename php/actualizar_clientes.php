<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';


$cedula = $_REQUEST['txtCedula'];
$nombre = $_REQUEST['txtNombre'];
$apellido = $_REQUEST['txtApellido'];
$direccion = $_REQUEST['txtDir'];
$telefono = $_REQUEST['txtTel'];
$celular = $_REQUEST['txtCel'];
$correo = $_REQUEST['txtCorreo'];
$ciudad  = $_REQUEST['cboCiudad'];


//Insertar los datos del cliente
$sql = "UPDATE tbl_clientes 
	SET nombre = '$nombre',
    apellido = '$apellido',
	direccion = '$direccion', 
	telefono  = '$telefono',
	celular = '$celular',
	correo = '$correo',
	idciudad = '$ciudad',
 	f_modi=now(), 
 	u_modi='jagalindezc'  
WHERE cedula='$cedula' ";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
?>
<script>
parent.Recargar();
alert('Registro Modificado');
</script>
<?php
} else {
?>
<script>
parent.Limpiar();
alert('Error: No se pudo Modicar el registro ');
</script>
<?php
}
?>
<script>

</script>