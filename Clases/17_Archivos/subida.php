<?php
 
  if(!is_dir('avatares')){
    mkdir('avatares');
  }

  /*uniqid — Genera un ID único, basado n microsegundos. Devuelve el identificador único, como string.
    basename — Devuelve el último componente de nombre de una ruta 
    https://www.php.net/manual/es/features.file-upload.post-method.php   */
  $destino = 'avatares/' . uniqid() .'_' . basename($_FILES['avatar']['name']);

    //move_uploaded_file — Mueve un archivo subido a una nueva ubicación
    if(move_uploaded_file($_FILES['avatar']['tmp_name'], $destino)){
      echo 'Archivo subido correctamente';
    }
    else{
      echo 'Error al subir el archivo';
    }

?>
