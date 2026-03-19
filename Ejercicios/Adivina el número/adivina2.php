<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"></head>
<body>
<?php
	// Asignan los valores pasados del formulario en los campos hidden
	$oportunidades = $_POST['oportunidades'];					// el valor es 3
	$numeroIntroducido = $_POST['numeroIntroducido'];			// el valor es 555 (sirve para identificar la primera vez)
	$numeroSecreto = 4;									
	if ($numeroIntroducido == $numeroSecreto): 
		echo "Enhorabuena, has acertado el número!";
	else:
		if ($oportunidades == 0):
			echo "Lo siento, has agotado todas tus oportunidades. Has perdido";
			$oportunidades=3;
		else:
			if ($numeroIntroducido!=555):
				if ($numeroSecreto > $numeroIntroducido):
					print "El número que estoy pensando es <strong> mayor </strong> que el número que has introducido.<br>";
				else:
					print "El número que estoy pensando es <strong> menor </strong> que el número que has introducido.<br>";
				endif;
			endif;
		endif;
	endif;
?>

Te quedan <?= $oportunidades-- ?> oportunidades para adivinar el número.<br>
Introduce un número del 0 al 10
<form action="adivina2.php" method="post">
<input type="text" name="numeroIntroducido">
<input type="hidden" name="oportunidades" value="<?= $oportunidades ?>">
<input type="submit" value="Continuar">
</form>

</body>
</html>