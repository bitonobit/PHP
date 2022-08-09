<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		table {
			float: left;
			margin-right: 20px;
		}
	</style>
</head>
<body>

	<?php

		for ($j=1; $j <= 9 ; $j++) { 	// primer bucle para las tablas

			echo '<table border="1px">';
			$num = $j;
			echo "<th colspan=\"4\">" . $num . "</th >";

			for ($i=1; $i <= 10 ; $i++) {	// bucle para una tablas
				echo "<tr>";
					echo "<td> $num </td> <td> x </td> <td> $i </td><td>" .  $num * $i . "</td>";
				echo "</tr>";
			}

			echo "</table>";
		}

	?>

</body>
</html>