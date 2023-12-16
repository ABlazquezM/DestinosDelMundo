<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administración</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    body {
      background-image: url("imagenes/aa.jpg");
    }

    #cabecera {
      text-align: center;
      background-image: url("imagenes/iconoCabecera.png"), url("imagenes/fondoCabecera.jpg");
      background-size: 50%, 100%;
      background-position: center center, top center;
      background-repeat: no-repeat;
      width: 100%;
      height: 200px;
      box-shadow: 10px 10px 50px 0px rgba(50, 0, 1, 0.40);
      margin-bottom: 20px
    }

    .menu {
      display: flex;
      justify-content: center;
      /* Centra los elementos horizontalmente */
      align-items: center;
      /* Centra los elementos verticalmente */
      margin-bottom: 20px;
    }

    .opcion {
      background-image: url("imagenes/menu.jpg");
      background-size: cover;
      margin: 0 10px;
      border-radius: 5px;
      width: 100%;
      text-align: center;
      font-family: 'Lato', sans-serif;
      font-size: 30px;
      text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
      box-shadow: 10px 10px 30px 0px rgba(50, 0, 1, 0.60);
    }

    .opcion:hover {
      background-image: url("imagenes/menu1.jpg");
      background-size: cover;
    }

    .opcion-contenido {
      padding: 10px;
    }

    .opcion a {
      display: block;
      text-decoration: none;
      color: #333;
      font-weight: bold;
    }

    form {
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 0px 5px #ccc;
      max-width: 600px;
      margin: 0 auto;
      margin-bottom: 10px;
      

    }

    label {
      display: block;
      margin-bottom: 5px;
      margin-top: 20px;
    }

    input[type="text"],
    textarea {
      display: block;
      width: 100%;
      padding: 10px;
      border-radius: 5px;
      border: none;
      margin-bottom: 20px;
      box-shadow: 0px 0px 5px #ccc;
      resize: vertical;
    }

    input[type="submit"],
    input[type="reset"] {
      background-color: #007bff;
      color: #fff;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 20px;
    }

    input[type="submit"]:hover,
    input[type="reset"]:hover {
      background-color: #0069d9;
    }

    .codyfoto {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin-bottom: 20px;
    }

    .imagen img {
      width: 600px;
      height: 300px;
      object-fit: cover;

    }

    .entrada {
      margin-bottom: 20px;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 0 5px #ddd;
      background-color: rgb(255, 165, 0);
    }

    .codigo{
      background-image: url("imagenes/menu.jpg");
      background-size: cover;
      width: 600px;
      text-align: center;
      padding: 5px;
      font-weight: bold;
      font-family: 'Lato', sans-serif;
      font-size: 30px;
      text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
    }

    .codigo-titulo {
      background-color: rgba(255, 255, 255, 0.8);
      padding: 5px 10px;
      border-radius: 5px;
      font-weight: bold;
      font-size: 1.2em;

    }

    .resumen {
      background-color: rgba(255, 255, 255, 0.6);
      padding: 10px;
      border-radius: 5px;
      font-size: 1.1em;
    }

    form {
      background-color: rgb(255, 165, 0);
      font-family: 'Lato', sans-serif;
      font-size: 20px;
    }
  </style>
</head>

<body>

  <div class="container">


    <!--cabecera-->
    <div class="row">
      <div id="cabecera" class="row"></div>

      <div class="row">

        <div class="menu">
          <div class="opcion">
            <div class="opcion-contenido"><a href="index.php" target="_blank">Inicio</a></div>
          </div>
          <div class="opcion">
            <div class="opcion-contenido"><a href="galeriaIndex.php" target="_blank">Galería</a></div>
          </div>
          <div class="opcion">
            <div class="opcion-contenido"><a href="administracionIndex.php">Administración</a></div>
          </div>
        </div>

      </div>
    </div>
    <!--cabecera-->
    <div class="row">
      <div class="col-6">
        <!--formulario-->
        <div class="row">
          <form action="administracion.php" method="post" enctype="multipart/form-data">
            <label for="titulo">Título:</label><br>
            <input type="text" id="titulo" name="titulo"><br>

            <label for="resumen">Resumen (máx. 255 caracteres):</label><br>
            <textarea id="resumen" name="resumen" maxlength="255"></textarea><br>

            <label for="imagen">Imagen:</label><br>
            <input type="file" id="imagen" name="imagen"><br>

            <label for="ubicacion">Ubicación:</label><br>
            <select id="ubicacion" name="ubicacion">
              <option value="Mundo">Mundo</option>
              <option value="Europa">Europa</option>
              <option value="España">España</option>
            </select><br>

            <input type="submit" value="Enviar">
            <input type="reset" value="Borrar">
          </form>


        </div>
        <!--formulario-->

        <!--entradas imagen-->
        <div class="row">

          <?php
          // Para conectarse con la BBDD prueba
          
          $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("La conexión ha fallado");
          $conexion->set_charset("utf8");

          // Hacemos una consulta para sacar el código y el nombre de la imagen
          $consulta = "SELECT cod, imagen FROM viajes";
          $resultado = mysqli_query($conexion, $consulta);

          // Y con esto mostramos lo datos de forma vertical 
          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="codyfoto">';
            echo '<div class="codigo">' . $fila['cod'] . '</div>';
            echo '<div class="imagen"><img src="ficheroAdmin/' . $fila['imagen'] . '"></div>';
            echo '</div>';
          }

          mysqli_close($conexion);
          ?>

        </div>
      </div>

      <!--entradas-->
      <div class="col-6">

        <?php
        // Conectarse a la base de datos
        $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("La conexión ha fallado");
        $conexion->set_charset("utf8");

        // Consultar los datos de la tabla
        $consulta = "SELECT cod, titulo, resumen FROM viajes";
        $resultado = mysqli_query($conexion, $consulta);

        // Mostrar los datos en una estructura vertical
        while ($fila = mysqli_fetch_assoc($resultado)) {
          echo '<div class="entrada">';
          echo '<div class="codigo-titulo">' . $fila['cod'] . ' - ' . $fila['titulo'] . '</div>';
          echo '<div class="resumen">' . $fila['resumen'] . '</div>';
          echo '</div>';
        }

        // Cerrar la conexión
        mysqli_close($conexion);
        ?>


      </div>

    </div>

  </div>

</body>

</html>