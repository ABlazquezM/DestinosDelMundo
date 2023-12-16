<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

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
            border-radius: 0px;
            width: 100%;
            height: 200px;
            box-shadow: 10px 10px 50px 0px rgba(50, 0, 1, 0.40);
            margin-bottom: 20px
        }

        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
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

        .boton {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #refresh-btn {
            font-family: Arial, sans-serif;
            font-size: 16px;
            background-color: rgb(255, 165, 0);
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-bottom: 20px
        }

        #refresh-btn:hover {
            background-color: rgb(255, 208, 0);
        }

        .imagenes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .imagen {
            margin: 10px;
            text-align: center;
        }

        .imagen img {
            width: 400px;
            height: auto;
        }

        .nombre {
            background-image: url("imagenes/menu.jpg");
      background-size: cover;
            margin-top: 5px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            padding: 10px 20px;
            border: none;
      font-family: 'Lato', sans-serif;
      font-size: 20px;
      text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.5);
        }
    </style>
</head>

<body>
    <div class="container">

        <!--Cabecera-->
        <div id="cabecera" class="row"></div>

        <div class="row">

            <div class="menu">
                <div class="opcion">
                    <div class="opcion-contenido"><a href="index.php" target="_blank">Inicio</a></div>
                </div>
                <div class="opcion">
                    <div class="opcion-contenido"><a href="galeriaIndex.php">Galería</a></div>
                </div>
                <div class="opcion">
                    <div class="opcion-contenido"><a href="administracionIndex.php" target="_blank">Administración</a>
                    </div>
                </div>
            </div>

        </div>
        <!--Cabecera-->

        <div class="boton">

            <button id="refresh-btn">Refrescar</button>
            <script>
                document.getElementById("refresh-btn").onclick = function () {
                    location.reload();
                };
            </script>
        </div>

        <div class="image_upload_div">
            <form action="galeria.php" class="dropzone">
            </form>
        </div>

        <!--imagenes-->

        <div class="imagenes">
            <?php
            $dir = "ficheroIndex/";
            $files = scandir($dir);

            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {

                    echo '<div class="imagen">';
                    echo '<img src="' . $dir . $file . '"/>';

                    // Para que podamos mostrar el nombre del archivo sin la extensión
                    $nombre = pathinfo($file, PATHINFO_FILENAME);

                    echo '<div class="nombre">' . $nombre . '</div>';
                    echo '</div>';
                }
            }
            ?>
        </div>

    </div>
</body>

</html>