<?php
if ($_POST) {
    echo '<pre>';
    echo htmlspecialchars(print_r($_POST, true));
    echo '</pre>';
}
?>
<!-- Formulario donde la propiedad name es un arreglo-->
<form action="" method="POST">
    Nombre:  <input type="text" name="personal[nombre]" ><br/>
    Email:   <input type="text" name="personal[email]" ><br/>
    Cerveza: <br />
    <select multiple name="cerveza[]">
        <option value="warthog">Dorada</option>
        <option value="guinness">San Miguel</option>
        <option value="stuttgarter">Estrella Galicia</option>
    </select><br/>
    <input type="submit" value="¡enviarme!" />
</form>