<?php
// define variables e inicializa con valores vacíos (hay que probarlo)
$nombre = $email = $sexo = $comentario = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = validar($_POST["nombre"]);
  $email = validar($_POST["email"]);
  $website = validar($_POST["website"]);
  $comentario = validar($_POST["comentario"]);
  $sexo = validar($_POST["sexo"]);
}

function validar($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Validar entradas del formulario en php</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  <label for=""> Nombre:</label> <input type="text" nombre="nombre">
  <br><br>
  <label for="">E-mail:</label> <input type="text" nombre="email">
  <br><br>
  <label for="">Website:</label> <input type="text" nombre="website">
  <br><br>
  <label for="">Comentario:</label> <textarea nombre="comentario" rows="5" cols="40"></textarea>
  <br><br>
  <label for="">Sexo:</label>
  <input type="radio" nombre="sexo" value="Femenino">Femenino
  <input type="radio" nombre="sexo" value="Masculino">Masculino
  <input type="radio" nombre="sexo" value="Otro">Otro
  <br><br>
  <input type="submit" nombre="submit" value="Submit">  
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $nombre;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comentario;
echo "<br>";
echo $sexo;
?>

</body>
</html>