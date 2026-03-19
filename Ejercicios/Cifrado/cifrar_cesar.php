<?php

header('Content-Type: text/html; charset=UTF-8');
// Inicia el arreglo 
$abecedario = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];

// Convierte la codificación de caracteres del string Candy a la especificada por UTF-8.
//$palabra = mb_convert_encoding('Candy','UTF-8');

// Asigna la palabra a cifrar en una variable
$palabra = 'candy';

// declara un array
$letra_cifrada = array();

// Convierte un string en un array
$array = str_split($palabra);


// Ciclo que recorre el array de la palabra a modificar
for($i = 0;$i<count($array);$i++){
    // ciclo que recorre el array del abecedario buscando la letra a codificar
    for($j=0;$j<count($abecedario);$j++){

        if($array[$i] == $abecedario[$j]){
            // escoge la letra correspondiente para el mensaje cifrado
            switch($array[$i]){
                case 'w':
                array_push($letra_cifrada,'a');
                break;
                case 'x':
                array_push($letra_cifrada,'b');
                break;
                case 'y':
                array_push($letra_cifrada,'c');
                break;
                case 'z':
                array_push($letra_cifrada,'d');
                break;
                default:
                array_push($letra_cifrada,$abecedario[($j+4)]);
                break;
            }
            
        }
    }
}

//Une elementos de un array en un string
echo implode($letra_cifrada);
