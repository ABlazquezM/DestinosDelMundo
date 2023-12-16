<?php

    $conexion = mysqli_connect("localhost","root","","prueba") or die("La conexión ha fallado");
    $conexion -> set_charset("utf8");

    $ruta= "ficheroAdmin/";
    $nomfichero = basename($_FILES['imagen']['name']);

    $consulta = "INSERT INTO viajes (titulo,resumen,categoria,imagen) VALUES ('".$_POST['titulo']."','".$_POST['resumen']."','".$_POST['ubicacion']."','$nomfichero')";

    mysqli_query($conexion,$consulta);

    move_uploaded_file($_FILES['imagen']['tmp_name'],$ruta.$nomfichero);
   
    echo "    <div style='background-color: #FFF; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); max-width: 600px; margin: 0 auto; padding: 20px; text-align: center;'>
    <h2 style='color: #333; font-size: 24px; font-weight: bold; margin-top: 0;'>¡ El destino se a creado correctamente !</h2>
</div>";



    mysqli_close($conexion);

    header("refresh:3;administracionIndex.php");





?>