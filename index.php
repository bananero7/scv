<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="css/estilos.css" />
    <title>Sistema login</title>
  </head>
  <body>
    <main>
      <div class="contenedor_todo">
        <div class="contenedor_login">
          <!-- Login -->
          <form
            action="php/validar_usuario.php"
            method="post"
            class="formulario_login"
          >
            <h2>Iniciar Sesión</h2>
            <input
              type="text"
              id="txtUsuario"
              name="txtUsuario"
              placeholder="Usuario "
            />
            <input
              type="password"
              id="txtPwd"
              name="txtPwd"
              placeholder="Contraseña"
            />
            <button type="submit">Entrar</button>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
