<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';

$articulo = $_REQUEST['txtArticulo'];


//Insertar los datos del cliente
$sql = "SELECT * FROM tbl_ventas WHERE articulo='$articulo'";


//echo $sql."<br>";
$resultado = mysqli_query($conn, $sql);
if ($fila = mysqli_fetch_assoc($resultado)) {
?>
    <script>
        parent.document.getElementById('txtArticulo').value = '<?php echo $fila['articulo']; ?>';
        parent.document.getElementById('txtCliente').value = '<?php echo $fila['cliente']; ?>';
        parent.document.getElementById('txtCantidad').value = '<?php echo $fila['cantidad']; ?>';
        parent.document.getElementById('txtValorArt').value = '<?php echo $fila['valarticulo']; ?>';
        parent.document.getElementById('txtValorVe').value = '<?php echo $fila['valventa']; ?>';
    </script>

<?php
} else {
?>
    <script>
        alert('Registro no encontrado.. Ingrese los datos');
        parent.document.getElementById('txtArticulo').focus();
    </script>
<?php
}
?>