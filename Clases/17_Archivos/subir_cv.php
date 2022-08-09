<?php
  if(!is_dir('curriculums')){
    mkdir('curriculums');
  }
  //usamos uniqid para añadir un id único al archivo imprescindible en las páginas multiusuario
  $destino = 'curriculums/' .uniqid() .'_' . basename($_FILES['curriculum']['name']);



    if($_FILES['curriculum']['type'] == 'application/pdf' ){
      if(move_uploaded_file($_FILES['curriculum']['tmp_name'], $destino)){
        echo 'Archivo subido correctamente';
      }
      else{
        echo 'Error al subir el archivo';
      }
    }else{
      echo 'Formato de archivo no valido';
    }

?>
