<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Formulario de Clientes</title>
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
    <script type="text/javascript" src="../js/main.js">
    </script>



</head>

<body>
    <div class="contenedor_registro">
        <form action="guardar_venta.php" method="post">
            <table id="registro">
                <tr>
                    <th colspan="2">
                        <h1>Control Ventas</h1>
                    </th>
                </tr>
                <tr>
                    <th>ID:</th>
                    <td><input type="number" id="txtArticulo" name="txtArticulo" required />
                        <input type="button" id="btnConsultar" name="btnConsultar" value="Validar" onClick="ValidarVenta()"></input>
                    </td>
                </tr>
                <tr>
                    <th>Cliente:</th>
                    <td><input type="text" id="txtCliente" name="txtCliente" required /></td>
                </tr>
                <tr>
                    <th>Cantidad:</th>
                    <td><input type="number" id="txtCantidad" name="txtCantidad" /></td>
                </tr>
                <tr>
                    <th>Valor articulo:</th>
                    <td><input type="number" id="txtValorArt" name="txtValorArt" /></td>
                </tr>
                <tr>
                    <th>Valor Venta:</th>
                    <td><input type="number" id="txtValorVe" name="txtValorVe" /></td>
                </tr>
                <tr>
                    <th>Observaciones:</th>
                    <td></td>
                </tr>
                </tr>
                <tr>
                    <th colspan="2">
                        <table width="100%" id="botonera">
                            <tr>
                                <th>
                                    <input type="button" id="btnEnviarCli" name="btnEnviarCli" onCLick="GuardarVenta()" value="Guardar"></input>
                                </th>
                                <th>
                                    <input type="button" id="btnActualizar" name="btnActualizar" onClick="ActualizarVenta()" value="Actualizar"></input>
                                </th>
                                <th><input type="button" id="btnLimpiar" name="btnLimpiar" value="Limpiar" onClick="Limpiar()" /></th>
                                <th><input type="button" id="btnSalir" name="btnSalir" value="Salir" onClick="Salir()" />
                                </th>
                            </tr>
                        </table>
                    </th>
                </tr>
            </table>
        </form>
    </div>
    <!-- Listados de Clientes en la Base de Datos -->
    <div class="contenedor_tabla_datos">
        <table id="tabla_datos">
            <tr>
                <th colspan="10">
                    <h1>Listado de Ventas </h1>
                </th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Articulo</th>
                <th>Cliente</th>
                <th>Cantidad</th>
                <th>Valor articulo</th>
                <th>Valor venta</th>
                <th>Estado</th>
            </tr>
            <?php
            include 'conexion/conexion.php';
            //Conexion a la Base de datos

            $sql = " SELECT * FROM tbl_ventas ORDER BY idventa asc ";
            $resultado = mysqli_query($conn, $sql);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                <td align='right'>" . $fila['idventa'] . "</td>
                <td align='right'>" . $fila['articulo'] . "</td>			
                <td>" . $fila['cliente'] . "</td>
                <td>" . $fila['cantidad'] . "</td>	
                <td>" . $fila['valarticulo'] . "</td>
                <td align='right'>" . $fila['valventa'] . "</td>";

                $estado = $fila['estado'];
                if ($estado == 'A') {
                    $estado = 'Activo';
                } else {
                    $estado = 'inActivo';
                }
                echo "	<td>" . $estado . "</td>
            </tr>";
            }

            ?>

        </table>
    </div>
    <iframe id="frmGuardar" name="frmGuardar" width="0" height="0" frameborder="0" src="" style="visibility:hidden"></iframe>
</body>

</html>