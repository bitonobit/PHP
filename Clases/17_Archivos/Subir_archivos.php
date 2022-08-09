<!DOCTYPE html>
<html lang="es">
<head>
  <title>Subir de archivos</title>
</head>
<body>
  <form name="upload" action="subida.php" method="post" enctype="multipart/form-data">
    	<input type="hidden" name="MAX_FILE_SIZE" value="2097152">
    	<label for="avatar">Archivo: </label><br><br>
    	<input type="file" name="avatar"><br><br>
    	<input type="submit" value="Guardar">
  </form>
</body>
</html>
