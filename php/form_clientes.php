<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Registro e ingreso clientes</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <script src="../js/main.js"></script>
</head>

<body>
    <main>
        <div class="contenedor_registro">
            <form action="guardar_clientes.php" method="post">
                <table id="registro">
                    <tr>
                        <th colspan="2">
                            <h1>Registro Clientes</h1>
                        </th>
                    </tr>
                    <tr>
                        <th>Cedula: </th>
                        <td>
                            <input type="number" id="txtCedula" name="txtCedula" required />
                            <input type="button" id="btnConsulta" name="btnConsulta" value="validar"
                                onClick="Validar()" />
                        </td>
                    </tr>
                    <tr>
                        <th>Nombre: </th>
                        <td>
                            <input type="text" id="txtNombre" name="txtNombre" />
                        </td>
                    </tr>
                    <tr>
                        <th>Apellido: </th>
                        <td>
                            <input type="text" id="txtApellido" name="txtApellido" />
                        </td>
                    </tr>
                    <tr>
                        <th>Direccion: </th>
                        <td>
                            <input type="number" id="txtDir" name="txtDir" />
                        </td>
                    </tr>
                    <tr>
                        <th>Telefono: </th>
                        <td>
                            <input type="number" id="txtTel" name="txtTel" />
                        </td>
                    </tr>
                    <tr>
                        <th>Celular: </th>
                        <td>
                            <input type="number" id="txtCel" name="txtCel" />
                        </td>
                    </tr>
                    <tr>
                        <th>Correo: </th>
                        <td>
                            <input type="mail" id="txtCorreo" name="txtCorreo" />
                        </td>
                    </tr>
                    <tr>
                        <th>Ciudad</th>
                        <td>
                            <select id="cboCiudad" name="cboCiudad" style="width:100%">
                                <option value="">-- --</option>
                                <?php
                //Conexion a la Base de datos
                include 'conexion/conexion.php';

                //Tomar datos de la ciudad de la BD
                $sql = " SELECT * FROM tbl_ciudad ORDER BY nombre ";
                //echo $sql

                $resultado = mysqli_query($conn, $sql);

                while ($fila = mysqli_fetch_assoc($resultado)) {
                  echo "<option value='" . $fila['idciudad'] . "'>" . $fila['nombre'] . "</option>";
                }
                ?>
                            </select>
                        </td>
                    </tr>
                </table>
                <th colspan="2">
                    <table width="100%" id="botonera">
                        <tr>
                            <th>
                                <input type="button" id="btnEnviarCli" name="btnEnviarCli" value="Guardar"
                                    onCLick="Guardar()" />
                            </th>
                            <th>
                                <input type="button" id="btnActualizarCli" name="btnActualizarCli" value="Actualizar"
                                    onCLick="Actualizar()" />
                            </th>
                            <th>
                                <input type="button" id="btnLimpiarCli" name="BtnLimpiarCli" value="Limpiar"
                                    onClick="Limpiar()" />
                            </th>
                        </tr>
                    </table>
                </th>
                </table>
        </div>
        </form>
        </div>

        <!-- Listados de Clientes en la Base de Datos -->
        <div class="contenedor_tabla_datos">
            <table id="tabla_datos">
                <tr>
                    <th colspan="10">
                        <h1>Listado de Clientes </h1>
                    </th>
                </tr>
                <tr>
                    <th>Id</th>
                    <th>Cedula</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Celular</th>
                    <th>Correo</th>
                    <th>Ciudad</th>
                    <th>Estado</th>
                </tr>

                <?php

        $sql = " select * from tbl_clientes order by idcliente";
        //echo $sql;

        //llenar la tabla con los valores actualizados
        $resultado = mysqli_query($conn, $sql);
        while ($fila = mysqli_fetch_assoc($resultado)) {
          echo "<tr>
          <td align='right'>" . $fila['idcliente'] . "</td>
          <td align='right'>" . $fila['cedula'] . "</td>			
          <td>" . $fila['nombre'] . "</td>
          <td>" . $fila['apellido'] . "</td>	
          <td>" . $fila['direccion'] . "</td>
          <td align='right'>" . $fila['telefono'] . "</td>			
          <td align='right'>" . $fila['celular'] . "</td>
          <td>" . $fila['correo'] . "</td>";

          $ciudad = $fila['idciudad'];
          //Buscar la Ciudad en la tabla de Ciudades
          $sql = " select nombre from tbl_ciudad where idciudad='$ciudad'";
          //echo $sql;
          $rCiudad = mysqli_query($conn, $sql);
          $fila_ciudad = mysqli_fetch_assoc($rCiudad);
          $nCiudad = "No Registrada...";
          if ($fila_ciudad['nombre'] != '') {
            $nCiudad = $fila_ciudad['nombre'];
          }


          $estado = $fila['estado'];
          if ($estado == 'A') {
            $estado = 'Activo';
          } else {
            $estado = 'inActivo';
          }
          echo " <td> " . $nCiudad . "</td>";
          echo "	<td>" . $estado . "</td>
        </tr>";
        }

        ?>
            </table>
        </div>
        <iframe id="frmGuardar" name="frmGuardar" width="0" height="0" frameborder="0" src=""
            style="visibility:hidden"></iframe>
        <main>
</body>

</html>