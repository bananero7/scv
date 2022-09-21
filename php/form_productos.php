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
        <form action="/php/Guardar/guardar_producto.php" method="post">
            <table id="registro">
                <tr>
                    <th colspan="2">
                        <h1>Control Productos</h1>
                    </th>
                </tr>
                <tr>
                    <th>Codigo:</th>
                    <td><input type="number" id="txtCodigo" name="txtCodigo" required />
                        <input type="button" id="btnConsultar" name="btnConsultar" value="Validar" onClick="ValidarProducto()"></input>
                    </td>
                </tr>
                <tr>
                    <th>Descripcion:</th>
                    <td><input type="text" id="txtDescripcion" name="txtDescripcion" size="60" /></td>
                </tr>
                <tr>
                    <th>Cantidad:</th>
                    <td><input type="number" id="txtCantidad" name="txtCantidad" /></td>
                </tr>
                <tr>
                    <th>Stock:</th>
                    <td><input type="number" id="txtStock" name="txtStock" /></td>
                </tr>
                <tr>
                    <th>Valor Unitario:</th>
                    <td><input type="number" id="txtValorUnitario" name="txtValorUnitario" /></td>
                </tr>
                <tr>
                    <th>Imagen:</th>
                    <td><input type="image" id="txtImg" name="txtImg" src="" width="50%" height="50%" /><br>
                        <select id="cboImagenes" name="cboImagenes" onChange="CambiarProducto()">
                            <option value="">-- --</option>
                            <option value="p1.jpg">Producto 1</option>
                            <option value="p2.jpg">Producto 2</option>
                        </select>
                    </td>
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
                                    <input type="button" id="btnEnviarCli" name="btnEnviarCli" onCLick="GuardarProducto()" value="Guardar"></input>
                                </th>
                                <th>
                                    <input type="button" id="btnActualizar" name="btnActualizar" onClick="ActualizarProducto()" value="Actualizar"></input>
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
                    <h1>Listado de Productos </h1>
                </th>
            </tr>
            <tr>
                <th>Id</th>
                <th>Codigo</th>
                <th>Descripcion</th>
                <th>Cantidad</th>
                <th>Stock</th>
                <th>Valor unitario</th>
                <th>Imagen</th>
                <th>Estado</th>
            </tr>
            <?php
            include 'conexion/conexion.php';
            //Conexion a la Base de datos

            $sql = " SELECT * FROM tbl_productos ORDER BY idproducto asc ";
            $resultado = mysqli_query($conn, $sql);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>
                <td align='right'>" . $fila['idproducto'] . "</td>
                <td align='right'>" . $fila['codigo'] . "</td>			
                <td>" . $fila['descripcion'] . "</td>
                <td>" . $fila['cantidad'] . "</td>	
                <td>" . $fila['stock'] . "</td>
                <td align='right'>" . $fila['vunitario'] . "</td>
                <td>" . $fila['rimagen'] . "</td>";

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