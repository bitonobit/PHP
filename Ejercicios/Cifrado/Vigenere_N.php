<?php
header('Content-Type: text/html; charset=ISO-8859-1');

function Vigenere($texto,$clave)

{
	

function encontrar_letra($texto){
		$x="";
        for($i=0;$i<strlen($texto);$i++){
            // $texto[$i]=chr(ord($texto[$i])+$clave);
           $x= $x . (ord($texto[$i])-65) . ',';

        }
        		
        return $x;
    		
    }; 

function alfabeto($j){
	$fila=array();
	for ($i=0; $i <=26 ; $i++) { 
		# Llenar un arreglo con letras
		if (($i+$j+65)>90) {
			$fila[$i]=chr($i+$j+65-24);
		}
		else{
			$fila[$i]=chr($i+$j+65);
		}
	
	}
	
	return $fila;
};

function matriz(){
	$columna=array();
	for ($i=0; $i <=25 ; $i++) { 
		# Llenar un arreglo con letras
		$columna[$i]=alfabeto($i);
	}
	return $columna;
};


 $a=matriz();

 // echo chr($a[0][14]);

 // print_r($a);
$cifrado="";
$x=encontrar_letra($texto);
$y=encontrar_letra($clave);

$hari=explode(",", $x);
$clave=explode(",", $y);



for ($z=0; $z < count($hari)-1; $z++) { 
	$i=$hari[$z];
	$j=$clave[$z];
	echo $a[$i][$j];
}
};

$texto="CASA";
$clave="AZUL";
Vigenere($texto,$clave);

?>