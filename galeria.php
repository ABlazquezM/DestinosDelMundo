<?php
    $dir = "ficheroIndex/";
    $fichero = $_FILES['file']['name'];
    $destino = $dir . $fichero;

    if(move_uploaded_file($_FILES['file']['tmp_name'], $destino)){
        echo "<h3 style='text-align:center;'>El archivo $fichero se ha subido correctamente!!!</h3>";
    } else {
        echo "<h3 style='text-align:center;color:red;'>Ha habido un error en la subida del archivo</h3>";     
    }
?>