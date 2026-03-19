<?php
    $entidad = $_POST["entidad"];
    $sucursal = $_POST["sucursal"];
    $dc = $_POST["dc"];
    $cuenta = $_POST["cuenta"];

    /*comprobar longitud de sucursal y añadir 0 a la izquierda*/
    if(mb_strlen($sucursal) < 2)
        $sucursal = "000" . $sucursal;
    elseif(mb_strlen($sucursal) < 3)
        $sucursal = "00" . $sucursal;
    elseif(mb_strlen($sucursal) < 4)
        $sucursal = "0" . $sucursal;
    
    $control1 = strrev($entidad . $sucursal);//cadena reversa
    $control1 = str_split($control1, 1);// cadena a array de 1 en 1

    $control2 = strrev($cuenta);
    $control2 = str_split($control2, 1);

    $resul1 = dcont($control1);
    $resul2 = dcont($control2);

    $dc1 = 11-($resul1 % 11);
    $dc2 = 11-($resul2 % 11);
    
    if($dc1 == 11)
        $dc1 = 0;

    if($dc2 == 11)
        $dc2 = 0;
    
    $dc = str_split($dc);

    if($dc[0] == $dc1 && $dc[1] == $dc2)
        echo " Entidad = $entidad Sucursal = $sucursal  DC = $dc1" . "$dc2 Cuenta = $cuenta";
    else
        echo "El número de control no coincide con los datos de la cuenta";

    function dcont($control){
        $i = 0;
        while($i < sizeof($control)){
        switch($i){
            case 0:
                $control[$i] = $control[$i] * 6; break;
            case 1:
                $control[$i] = $control[$i] * 3; break;
            case 2:
                $control[$i] = $control[$i] * 7; break;
            case 3:
                $control[$i] = $control[$i] * 9; break;
            case 4:
                $control[$i] = $control[$i] * 10; break;
            case 5:
                $control[$i] = $control[$i] * 5; break;
            case 6:
                $control[$i] = $control[$i] * 8; break;
            case 7:
                $control[$i] = $control[$i] * 4; break;  
            case 8:
                $control[$i] = $control[$i] * 2; break;
            case 9:
                $control[$i] = $control[$i] * 1; break;
        }
        $i++; 
    }
        return (array_sum($control))    ;
    }
?>