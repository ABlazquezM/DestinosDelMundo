<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Destinos del mundo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  <style>
    @import url('https://fonts.googleapis.com/css2?family=Lato&display=swap');

    body {
      background-image: url("imagenes/aa.jpg");
    }

    #cabecera {
      text-align: center;
      background-image: url("imagenes/iconoCabecera.png"), url("imagenes/fondoCabecera.jpg");
      background-size: 50%, 100%;
      background-position: center center, top center;
      background-repeat: no-repeat;
      border-radius: 0px;
      width: 100%;
      height: 200px;
      box-shadow: 10px 10px 50px 0px rgba(50, 0, 1, 0.40);
      margin-bottom: 20px /*Añade margen debajo de la cabecera*/
    }

    .menu {
      display: flex;
      justify-content: center;/* Centra los elementos horizontalmente */
      align-items: center;/* Centra los elementos verticalmente */
      margin-bottom: 20px;
    }

    .opcion {
      background-image: url("imagenes/menu.jpg");
      background-size: cover;
      margin: 10px;
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
      /* Imagen de fondo cuando el cursor pasa por encima */
    }

    .opcion-contenido {
      padding: 10px;
    }

    .opcion a {
      display: block; /* Hace que el enlace ocupe todo el espacio del elemento div */
      text-decoration: none;
      color: #333;
      font-weight: bold;  /* Fuente en negrita */
    }

    .mundo,.europa,.espana,.novedades{
      background-size: 45%, 100%;
      background-position: center center, top center;
      background-repeat: no-repeat;
      border: 2px solid black;
      width: 100%;
      height: 100px;
      display: flex;
      justify-content: center;
      align-items: center;
      font-family: 'Lato', sans-serif;
      font-size: 30px;
      text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
      box-shadow: 10px 10px 30px 0px rgba(50, 0, 1, 0.60);
      margin-bottom: 20px;
    }
    

    .mundo {
      background-image: url("imagenes/mundo.png"), url("imagenes/fondoCabecera.jpg");
    }

    .europa {
      background-image: url("imagenes/Europa.png"), url("imagenes/fondoCabecera.jpg");
    }

    .espana {
      background-image: url("imagenes/España.png"), url("imagenes/fondoCabecera.jpg");
    }

    .fichas {
      height: 100%;
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }

    .ficha {
      width: 400px;
      height: 460px;
      margin-right: 20px;  /* Establece un margen derecho de 20 píxeles para separar los div */
      display: inline-block; /* Hace que los div se muestren en línea uno al lado del otro */
      border: 1px solid black;
      text-align: center;
      overflow-y: auto; /*en caso de modificar el maxlength del texto, apareceria un scroll*/
    }

    .ficha:hover{width: 500px;transition-property: width;transition-duration: 2s;} /*La ficha se modifica */

    .ficha h2 {
      margin-top: 20px; /* Establece un margen superior de 20 píxeles para el título */
    }

    .ficha img {
      width: 100%;
      height: 200px;/* Establece una altura fija de 200 píxeles para la imagen */
      object-fit: cover;  /* Hace que la imagen se ajuste al tamaño del div sin deformarla */
    }

    .ficha p {
      margin-top: 20px; /* Establece un margen superior de 20 píxeles para la descripción */
      margin-bottom: 20px; /* Establece un margen inferior de 20 píxeles para la descripción */
      padding: 0 20px;
      text-align: left;
    }

    .novedades {
      background-image: url("imagenes/novedades2.png"), url("imagenes/fondoCabecera.jpg");
      background-size: 100%, 100%;
    }

    .novs {
      display: flex;
      flex-direction: column;
      height: 30vh;
    }

    .box {
      flex: 1;
      margin: 5px;
      width: 100%;
      height: 2px;
      margin-right: 20px;
      text-align: center;
      display: flex;
      justify-content: center;
      align-items: center;
      background-color: orange;
    }

    .banner {
      background-image: url("imagenes/Banner.png");
      background-size: 100%;
      background-position: center center, top center;
      background-repeat: no-repeat;
      width: 95%;
      height: 610px;
      display: flex;
      justify-content: center;
      box-shadow: 10px 10px 30px 0px rgba(50, 0, 1, 0.60);
      margin-top: 20px;
      margin-left: 15px;
    }
  </style>

</head>

<body>

  <div class="container">
    <div class="row">



      <div id="cabecera" class="row"></div>

      <div class="row">

        <div class="menu">
          <div class="opcion">
            <div class="opcion-contenido"><a href="index.php">Inicio</a></div>
          </div>
          <div class="opcion">
            <div class="opcion-contenido"><a href="galeriaIndex.php" target="_blank">Galería</a></div>
          </div>
          <div class="opcion">
            <div class="opcion-contenido"><a href="administracionIndex.php" target="_blank">Administración</a></div>
          </div>
        </div>

      </div>

      <div class="row">

        <div class="col-9">

          <?php
          
          // Conectarse a la base de datos
          $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("La conexión ha fallado");
          $conexion->set_charset("utf8");

          // Consultar los datos de la tabla
          $consulta = "SELECT imagen, titulo, resumen FROM viajes WHERE categoria = 'Mundo' ORDER BY fecha DESC LIMIT 2";
          $resultado = mysqli_query($conexion, $consulta);

          // Mostrar los datos en una estructura vertical
          echo '<div class="todo">';
          echo '<div class="mundo"></div>';
          echo '<div class="fichas">';

          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="ficha">';
            echo '<img src="ficheroAdmin/' . $fila['imagen'] . '" alt="' . $fila['titulo'] . '">';
            echo '<h2>' . $fila['titulo'] . '</h2>';
            echo '<p>' . $fila['resumen'] . '</p>';
            echo '</div>';
          }

          echo '</div>';
          echo '</div>';

          //europa//
          
          // Consultar los datos de la tabla
          $consulta = "SELECT imagen, titulo, resumen FROM viajes WHERE categoria = 'Europa' ORDER BY fecha DESC LIMIT 2";
          $resultado = mysqli_query($conexion, $consulta);

          // Mostrar los datos en una estructura vertical
          echo '<div class="todo">';
          echo '<div class="europa"></div>';
          echo '<div class="fichas">';

          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="ficha">';
            echo '<img src="ficheroAdmin/' . $fila['imagen'] . '" alt="' . $fila['titulo'] . '">';
            echo '<h2>' . $fila['titulo'] . '</h2>';
            echo '<p>' . $fila['resumen'] . '</p>';
            echo '</div>';
          }

          echo '</div>';
          echo '</div>';

          // España//
          
          $consulta = "SELECT imagen, titulo, resumen FROM viajes WHERE categoria = 'España' ORDER BY fecha DESC LIMIT 2";
          $resultado = mysqli_query($conexion, $consulta);

          // Mostrar los datos en una estructura vertical
          echo '<div class="todo">';
          echo '<div class="espana"></div>';
          echo '<div class="fichas">';

          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="ficha">';
            echo '<img src="ficheroAdmin/' . $fila['imagen'] . '" alt="' . $fila['titulo'] . '">';
            echo '<h2>' . $fila['titulo'] . '</h2>';
            echo '<p>' . $fila['resumen'] . '</p>';
            echo '</div>';
          }

          echo '</div>';
          echo '</div>';

          // Cerrar la conexión
          mysqli_close($conexion);
          ?>

          <!---->

        </div>

        <div class="col-3">

          <?php
          // Conectarse a la base de datos
          $conexion = mysqli_connect("localhost", "root", "", "prueba") or die("La conexión ha fallado");
          $conexion->set_charset("utf8");

          // Consultar los datos de la tabla
          $consulta = "SELECT titulo FROM viajes ORDER BY fecha DESC LIMIT 5";
          $resultado = mysqli_query($conexion, $consulta);

          // Mostrar los datos en una estructura de divs
          echo '<div class="row">';
          echo '<div class="novedades"></div>';
          echo '<div class="novs">';

          while ($fila = mysqli_fetch_assoc($resultado)) {
            echo '<div class="box">' . $fila['titulo'] . '</div>';
          }

          echo '</div>';
          echo '</div>';

          // Cerrar la conexión
          mysqli_close($conexion);
          ?>

          <div class="row">
            <div class="banner"> </div>

          </div>
        </div>

      </div>


    </div>


  </div>



</body>

</html>