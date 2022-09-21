<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script type="text/javascript" src="../js/main.js"></script>
    <title>Menu</title>
</head>

<body>
    <div class="contenedor_menu">
        <table class="menu_principal">
            <tr>
                <th colspan="7">
                    <h1>Menu de control</h1>
                </th>
            </tr>
            <tr id="first-row">
                <td>
                    <input type="button" value="Empleados" onclick="Cargar(1)" />
                </td>

                <td>
                    <input type="button" value="Clientes" onclick="Cargar(2)" />
                </td>

                <td>
                    <input type="button" value="Productos" onclick="Cargar(3)" />
                </td>

                <td>
                    <input type="button" value="Ventas" onclick="Cargar(4)" />
                </td>
            <tr>
                <td>
                    <input type="button" value="Listado Empleados" onclick="Cargar(5)" />
                </td>

                <td>
                    <input type="button" value="Listado Clientes" onclick="Cargar(6)" />
                </td>

                <td>
                    <input type="button" value="Listado Productos" onclick="Cargar(7)" />
                </td>
                <td>
                    <input type="button" value="Salir" onclick="Cargar(8)" />
                </td>
            </tr>
            </tr>
        </table>
    </div>
</body>

</html>