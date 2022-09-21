<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validar Usuario</title>
</head>

<body>
<?php
//conexion base de datos
include 'conexion.php'; 

//Recibir Datos del formulario
$usuario = $_POST['txtUsuario'];
$pwd = $_POST['txtPwd'];

//Validar el usuario en la base de datos 
$sql= " select * from tbl_usuarios where usuario='$usuario' and clave='$pwd' ";
//echo $sql;

//validar credenciales
$resultado = mysqli_query($conn, $sql);

if (!$resultado) {
    echo "Usuario y/o Contraseña no validos\n";
}
if ($fila = mysqli_fetch_assoc($resultado)){
	 echo '
        <script>
            alert("Bienvenido!");
			window.location="form_clientes.php"
        </script>
    ';
} else {
	echo '
	<script>
	alert("usuario y/o contraseña incorrectos");
	window.location="../index.html"
	</script>
	';
}
mysqli_close($conn);

?>

</body>
</html>