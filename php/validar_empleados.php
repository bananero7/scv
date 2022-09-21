<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';

$cedula = $_REQUEST['txtCedula'];


//Insertar los datos del empleado
$sql = "Select * from tbl_empleados where cedula ='$cedula' ";

echo $sql."<br>";
$resultado = mysqli_query($conn, $sql);
if ($fila = mysqli_fetch_assoc($resultado)){
?>
<script>
	parent.document.getElementById('txtNombre').value='<?php echo $fila['nombre']; ?>';
	parent.document.getElementById('txtApellido').value='<?php echo $fila['apellido']; ?>';
	parent.document.getElementById('txtDir').value='<?php echo $fila['direccion']; ?>';
	parent.document.getElementById('txtTel').value='<?php echo $fila['telefono']; ?>';
	parent.document.getElementById('txtCel').value='<?php echo $fila['celular']; ?>';									
	parent.document.getElementById('txtCorreo').value='<?php echo $fila['correo']; ?>';		
	parent.document.getElementById('cboCiudad').value='<?php echo $fila['idciudad']; ?>';		
</script>


<?php
} 
else {
?>
<script>
	alert('Registro no encontrado.. Ingrese sus datos');
	parent.document.getElementById('txtCedula').focus();
</script>
<?php
}
?>
