<?php 

function crear_tabla($n) {
    $tabla = array();
    $valor=1;
    for($i=0; $i<$n; $i++) {
       $tabla[$i]= llenar_fila($n,$valor);
       $valor+=$n; 
    }

    return $tabla;
};

function llenar_fila($n,$valor) {

    for($j=0; $j<$n; $j++) {
       $fila[$j]= $valor+$j; 
    }
    return $fila;
};

function imprimir_tabla($tabla,$n) {

	echo "<table border=1>";
	for($i=0; $i<$n; $i++) {
		echo "<tr>";
	    for($j=0; $j<$n; $j++) {
	    	echo "<td>". $tabla[$i][$j] . "</td>";	       
	    }
	    echo "</tr>";

	}
};

function espiral($tabla, $n){

	for($i=0; $i<$n; $i++) {
		$e=1;	    
		
	    for($j=0; $j<$n; $j++) {	    	 
	    	$tabla[$i][$j]=$e+$j;
			$tabla[$j][$n-1]=$n+$j; 
	    	$tabla[$n-1][2-$j]=$n+$j+$i;             
	    }

	}
		return $tabla;
};

$n=3;
$tabla=crear_tabla($n);
$tabla=espiral($tabla, $n);
// var_dump($tabla);
imprimir_tabla($tabla, $n);


?>