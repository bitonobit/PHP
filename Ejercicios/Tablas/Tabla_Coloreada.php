<h2>Pruebas de código</h2>

<?php
	define("TAM",10);		// Define una constante 
	echo "<table border=1>";
	$n=1;
	for ($n1=1; $n1<=TAM; $n1++)
	{
		if ($n1 % 2 == 0)
			echo "<tr bgcolor=#bdc3d6>";
		else
			echo "<tr>";
		for ($n2=1; $n2<=TAM; $n2++)
		{
			echo "<td>", $n, "</td>";
			$n=$n+1;
		}
		echo "</tr>";
	}
echo "</table>";


?>