<?php
# veo si las cookies están vacías
  if (isset($_COOKIE['eventos'])) {
    $array = explode("/n",$_COOKIE['eventos']);		// explode: Divide un string en varios string.  
  }  else {
    $array = array();
  };

  if (isset($_POST['borrar'])) {				
      $id = $_POST['borrar'];
      unset($array[$id]);						 	                   //unset — Destruye una variable especificada. 
      $array = array_values($array);				             //Devuelve todos los valores de un array. 
      setcookie('eventos',implode("/n",$array));	       //Une elementos de un array en un string.  
  
  } else if (isset($_POST['agregar'])) {
      $new_item = $_POST['dia'].'|'.$_POST['hora'].'|'.$_POST['evento'];
      $array[] = $new_item;
      setcookie('eventos',implode("/n",$array));	       //Enviar una cookie. 
  } else {											                         // setcookie envia la cookie.  
      setcookie('eventos',null);
      $array = array();
  }
?>
<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <head>
        <title>Calendario de eventos</title>
    </head>
    <body>
      <h2>Calendario de eventos</h2>
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">	<!-- $_SERVER es un array que contiene información,
																		tales como cabeceras, rutas y ubicaciones de script. 
																		Las entradas de este array son creadas por el servidor web.
																		PHP_SELF: Es el archivo de script ejecutándose actualmente -->
																		
        <table border=1>
            <tr><th>Día</th><th>Hora</th><th>Evento</th><th>Operación</th></tr>
            <?php
              for ($i=0;$i<sizeof($array);$i++) {					//Ciclo para recorrer la cadena y llevarla a un array sizeof:Alias de count() 
                $values = explode("|",$array[$i]);
                echo '<tr><td>'.$values[0].'</td><td>'.$values[1].'</td><td>'.
                    $values[2].'</td><td><button name="borrar" value="'.$i.
                    '">Borrar</button></td></tr>';
              }
            ?>
			<!-- Formulario -->
            <tr><td><input size="10" name="dia" type="date"/></td>			
                <td><input name="hora" size="10" type="time"/></td>
                <td><input size="40" name="evento"/></td>
                <td><button name="agregar">Agregar</button></td>
            </tr>
        </table>
      </form>
    </body>
</html>