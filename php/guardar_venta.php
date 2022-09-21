<?php
//Conexion a la Base de datos
include 'conexion/conexion.php';


$articulo = $_REQUEST['txtArticulo'];
$cliente = $_REQUEST['txtCliente'];
$cantidad = $_REQUEST['txtCantidad'];
$valarticulo = $_REQUEST['txtValorArt'];
$valventa = $_REQUEST['txtValorVe'];


$verificar = mysqli_query($conn, "SELECT * FROM tbl_ventas WHERE articulo='$articulo' ");
if (mysqli_num_rows($verificar) > 0) {
    echo '
        <script>
        if (confirm("Articulo duplicada, actualizar?") == true) {
            //alert("Registro actualizado con exito");
            parent.ActualizarVenta();
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
$sql = "INSERT INTO tbl_ventas
(articulo, 
 cliente, 
 cantidad, 
 valarticulo, 
 valventa,
 estado, 
 f_crea, 
 u_crea) 
VALUES 
('$articulo',
 '$cliente',
 '$cantidad',
 '$valarticulo',
 '$valventa',
 'A',
 now(),
 'jagalindezc'
)";



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