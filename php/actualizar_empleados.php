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
$sql = "UPDATE tbl_empleados 
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
        alert('Registro Modificado');
		//parent.Recargar();
	</script>
	<?php
	} else {
	?>
	<script>
        alert('Error: No se pudo Modicar el registro ');
		parent.Limpiar();
	</script>
	<?php
	}
	?>
	<script>
	
	</script>
	