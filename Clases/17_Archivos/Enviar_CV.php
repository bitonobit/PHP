<?php
  //Crear un formulario que pida nombre de usuario (nombre, apellidos, direccion) y
  //un campo en el que el usuario suba su curriculum
?>
<!DOCTYPE html>
<html>
<head>
  <title>Guardar usuario en archivo</title>
  <meta charset="utf-8">
</head>
<body>
<form name="guardar-curriculum" action="subir_cv.php" method="post" enctype="multipart/form-data">
  <input type="text" name="nombre" placeholder="Introduce tu nombre"><br>
  <input type="text" name="apellido" placeholder="Introduce tu apellido"><br>
  <input type="number" name="telefono" placeholder="Introduce tu telefono"><br>
  <input type="email" name="email" placeholder="Introduce tu email"><br>
  <input type="hidden" name="MAX_FILE_SIZE" value="2097152">
  <strong>Curiculum:</strong> <br \><input type="file" name="curriculum" ><br \><br \>
  <input type="submit" value="Guardar"><br \>

</form>
</body>
</html>
