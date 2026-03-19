<?php
  $number = $_POST['number'];
  if (isset($number)) {
     $count = intval($_POST['count']);
     $count++;
     $numbers = Array();
     array_push($numbers,$number);
     for ($i = 0; $i < $count-1; $i++) {
        array_push($numbers,$_POST['number'.$i]);
    }
  } else {
    $count = 0;
  }
?>
<html>
    <head>
        <title>Probando el control de estados </title>
    </head>
    <body>
   <h1>Loteria</h1>
   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> <!-- $_SERVER es un array que contiene información,
																		tales como cabeceras, rutas y ubicaciones de script. 
																		Las entradas de este array son creadas por el servidor web.
																		PHP_SELF: Es el archivo de script ejecutándose actualmente -->
   <?php
      if ($count == 0) {
        echo "<h3>Bienvenido!!</h3>";
      } else {
        echo "<label>Tus números son: </label>";
        for ($i = 0; $i < $count-1; $i++)
            echo "<b>".$numbers[$i]."</b>, ";			  // array donde se guardan los valores
        echo "<b>".$numbers[$count-1]."</b></p>";		// Número de elementos que tiene el array
      }
      if ($count == 6) {								//Comprobación del número ganador
          echo "<h3>Buena Suerte!!</h3>";
      } else {
    ?>
   
   <label>Número a jugar:</label>
   <input type='text' name='number'/>					<!-- Formulario -->
   <input type='submit'>
   
   <?php } ?>
   <input type="hidden" value="<?php echo $count; ?>" name="count"/>		<!-- paso el count y el número jugado por un campo oculto -->
   <?php
      for ($i = 0; $i < $count; $i++) { ?>
      <input type="hidden" value="<?php echo $numbers[$i]; ?>"				
             name="number<?php echo $i?>"/>
   <?php } ?>
   </form>
  </body>
 </html>