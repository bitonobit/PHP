<!DOCTYPE html>
  <html lang="es">
    <head>
      <!-- Metadata -->
        <meta charset="utf-8">
        <title>Letras</title>
    </head>
  <body>

  <?php

    echo "  <h1> Juega con las Letras </h1>
            <form name='formulario' method='post' action='Letras.php'>
                <label>Frase</label>
                <input type='text' name='frase'/><br><br>
                <input type='radio' name='radio' value ='1'/><label>Número de caracteres</label><br>   
                <input type='radio' name='radio' value ='2'/><label>Frase de mayúsculas</label><br>     
                <input type='radio' name='radio' value ='3'/><label>Frase de minúsculas</label><br>  
                <input type='radio' name='radio' value ='4'/><label>Frase en orden inverso</label><br>  
                <input type='radio' name='radio' value ='5'/><label>Número de vocales</label><br>  
                <input type='radio' name='radio' value ='6'/><label>Sin espacios en blanco</label><br><br>  
                <input type='submit' name='mostrar' value='Mostrar'/>
                <input type='reset' name='limpiar' value = 'Limpiar'/>
            </form> <br>";

        $frase = $_POST["frase"];

            if($frase != null){
                switch ($_POST["radio"]){
                    case 1:
                        echo "La palabra $frase tiene " . mb_strlen($frase) . " caracteres"; //
                        break;
                    case 2:
                        echo "La palabra $frase en mayúsculas es " . strtoupper($frase);//Convierte una cadena a mmayúsculas.
                        break;
                    case 3:
                        echo "La palabra $frase en minúsculas es " . strtolower($frase); //Convierte una cadena a minúsculas. String strtolower ( string $string )
                        break;
                    case 4:
                        echo "La palabra $frase al revés es " . strrev($frase);		//Invierte una string. string strrev ( string $string )
                        break;
                    case 5:
                       foreach(count_chars($frase,1) as $item => $valor){		//Cuenta los caracteres.
                            //Devuelve una cadena de un caracter que contiene 
    						//el carácter especificado por ascii. string chr ( int $ascii )
    						if(strtolower(chr($item)) == 'a' || 
                               strtolower(chr($item)) == 'e' ||
                               strtolower(chr($item)) == 'i' ||
                               strtolower(chr($item)) == 'o' ||
                               strtolower(chr($item)) == 'u'){
                               echo "La palabra $frase contiene $valor " . chr($item) . "(es)<br>";
                            }
                        }
                        break;
                    case 6:
                        echo "La palabra $frase sin espacios en blanco es " . preg_replace('[\s+]',"", $frase); //Realiza una búsqueda y sustitución de una expresión regular
                        break;
                    default:
                        echo "<script type='text/javascript'>alert('opción no válida');</script> ";
                }
            }
            else{
                //echo "<script type='text/javascript'>alert('Introduzca una palabra');</script> ";
            }

    ?>

</body>
</html>

