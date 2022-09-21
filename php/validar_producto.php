<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';

$codigo = $_REQUEST['txtCodigo'];


//Insertar los datos del cliente
$sql = "SELECT * FROM tbl_productos WHERE codigo='$codigo'";


//echo $sql."<br>";
$resultado = mysqli_query($conn, $sql);
if ($fila = mysqli_fetch_assoc($resultado)) {
?>
    <script>
        parent.document.getElementById('txtCodigo').value = '<?php echo $fila['codigo']; ?>';
        parent.document.getElementById('txtDescripcion').value = '<?php echo $fila['descripcion']; ?>';
        parent.document.getElementById('txtCantidad').value = '<?php echo $fila['cantidad']; ?>';
        parent.document.getElementById('txtStock').value = '<?php echo $fila['stock']; ?>';
        parent.document.getElementById('txtValorUnitario').value = '<?php echo $fila['vunitario']; ?>';
        parent.document.getElementById('cboImagenes').value = '<?php echo $fila['rimagen']; ?>';
    </script>

<?php
} else {
?>
    <script>
        alert('Registro no encontrado.. Ingrese los datos');
        parent.document.getElementById('txtCodigo').focus();
    </script>
<?php
}
?>