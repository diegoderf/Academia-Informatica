<?php
    # definimos la carpeta destino
    $carpetaDestino="../archivos/";
 
    # si hay algun archivo que subir
    if($_FILES["archivo"]["name"][0])
    {
 
        # recorremos todos los arhivos que se han subido
        for($i=0;$i<count($_FILES["archivo"]["name"]);$i++)
        {
 
            # si es un formato pdf
            if($_FILES["archivo"]["type"][$i]=="application/pdf")
            {
 
                # si exsite la carpeta o se ha creado
                if(file_exists($carpetaDestino) || @mkdir($carpetaDestino))
                {
                    $origen=$_FILES["archivo"]["tmp_name"][$i];
                    $destino=$carpetaDestino."prueba.pdf";
 
                    # movemos el archivo
                    if(@move_uploaded_file($origen, $destino))
                    {
                        echo "<br>prueba.pdf se ha subido";
                    }else{
                        echo "<br>No se ha podido mover el archivo: ".$_FILES["archivo"]["name"][$i];
                    }
                }else{
                    echo "<br>No se ha podido crear la carpeta: up/".$user;
                }
            }else{
                echo "<br>".$_FILES["archivo"]["name"][$i]." - No es un archivo en formato PDF";
            }
        }
    }else{
        echo "<br>No se ha subido ninguna imagen";
    }
    ?>