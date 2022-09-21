<?php
// debido a un error de tipografia la base de datos tiene un nombre diferente
$servername = "localhost";
$database = "bd_svc";
$username = "root";
$password = "LABEQ004";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
/*
if ($conn){
    echo 'conexion exitosa';
} 
else{
    echo 'no se pudo conectar';
}
*/

?>