<?php
//conexion base de datos
include 'conexion/conexion.php';

echo'<script src="../js/main.js"></script> ';

$cedula = $_REQUEST['txtCedula'];
$nombre = $_REQUEST['txtNombre'];
$apellido = $_REQUEST['txtApellido'];
$direccion = $_REQUEST['txtDir'];
$telefono = $_REQUEST['txtTel'];
$celular = $_REQUEST['txtCel'];
$correo = $_REQUEST['txtCorreo'];
$ciudad  = $_REQUEST['cboCiudad'];

//validar si hay cedulas registradas

$verificar = mysqli_query($conn, "SELECT * FROM tbl_clientes WHERE cedula='$cedula' ");
if (mysqli_num_rows($verificar) > 0) {
    echo '
        <script>
        if (confirm("Cedula duplicada, actualizar?") == true) {
            //alert("Registro actualizado con exito");
            parent.Actualizar();
            }
        else{
            alert ("No se pudo actualizar el registro");
            //parent.Limpiar();
        }
        </script>
    ';
    exit();
} 

//Insertar los datos del cliente
$sql = "INSERT INTO tbl_clientes 
(cedula, 
 nombre, 
 apellido, 
 direccion, 
 telefono, 
 celular, 
 correo, 
 idciudad, 
 estado,
 f_crea,
 u_crea)
VALUES 
('$cedula',
 '$nombre',
 '$apellido',
 '$direccion',
 '$telefono',
 '$celular',
 '$correo',
 '$ciudad',
 'A',
 now(),
 'jagalindezc'
)";

//guardar clientes

if (mysqli_query($conn, $sql)) {
?>
<script>
	alert('Registro creado');
	window.location="form_clientes.php";
</script>

<?php
} else {
?>
<script>
    alert('Error: No se pudo crear el registro ');
    window.location="form_clientes.php";
</script>
<?php
}
?>  
?>