<?php
//conexion base de datos
include 'conexion/conexion.php';

$codigo = $_REQUEST['txtCodigo'];
$descripcion = $_REQUEST['txtDescripcion'];
$cantidad = $_REQUEST['txtCantidad'];
$stock = $_REQUEST['txtStock'];
$vunitario = $_REQUEST['txtValorUnitario'];
$rimagen = $_REQUEST['cboImagenes'];


//validar si hay cedulas registradas
$verificar = mysqli_query($conn, "SELECT * FROM tbl_productos WHERE codigo='$codigo' ");
if (mysqli_num_rows($verificar) > 0) {
    echo '
        <script>
        if (confirm("Codigo duplicada, actualizar?") == true) {
            //alert("Registro actualizado con exito");
            parent.ActualizarProducto();
            }
        else{
            alert ("No se pudo actualizar el registro");
            //parent.Limpiar();
        }
        </script>
    ';
    exit();
}


$sql = "INSERT INTO tbl_productos
(codigo, 
 descripcion, 
 cantidad, 
 stock, 
 vunitario,
 rimagen,
 estado, 
 f_crea, 
 u_crea) 
VALUES 
('$codigo',
 '$descripcion',
 '$cantidad',
 '$stock',
 '$vunitario',
 '$rimagen',
 'A',
 now(),
 'jagalindezc'
)";

//guardar clientes
if (mysqli_query($conn, $sql)) {
    echo '$sql';
?>
    <script>
        alert('Registro creado');
        //window.location="form_empleados.php";
    </script>

<?php
} else {
?>
    <script>
        alert('Error: No se pudo crear el registro xd');
        //window.location="form_empleados.php";
    </script>
<?php
}
?>
?>