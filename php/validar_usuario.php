<?php
//conexion base de datos
include 'conexion/conexion.php';

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
			window.location="menu.php"
        </script>
    ';
} else {
	echo '
	<script>
	alert("usuario y/o contraseña incorrectos");
	window.location="../index.php";
	</script>
	';
}
mysqli_close($conn);
