<!DOCTYPE html>
<!--
Ejercicio 01: formulario con opciones que va a la página calculo.php
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="get" action="calculo.php">
            <select name="num">
                <?php
                    for($c = 1; $c <= 100; $c++){
                       echo " <option>$c</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Calcular"/>
        </form>
        
    </body>
</html>