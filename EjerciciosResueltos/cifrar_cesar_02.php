<?php

header('Content-Type: text/html; charset=UTF-8');

$abecedario = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','ñ','o','p','q','r','s','t','u','v','w','x','y','z'];

$palabra = mb_convert_encoding('Candy','UTF-8');



$letra_cifrada = array();

$array = str_split($palabra);



for($i = 0;$i<count($array);$i++){
    for($j=0;$j<count($abecedario);$j++){
        if($array[$i] == $abecedario[$j]){
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
echo implode($letra_cifrada);