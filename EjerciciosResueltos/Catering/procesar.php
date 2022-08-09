<?php
     include("includes/encabezado.php");
     include("includes/menu.php");
     //Ejercicio 1
if(isset($_POST["btn1"])){

    function presupuesto(){
        $menu=$_POST["menu"];
        $comensales=$_POST["comensales"];
        $total=$menu*$comensales;
        if(($comensales>=100)&&($comensales<150)){
           $descuento=$total*0.1;
        }elseif ($comensales>=150){
            $descuento=$total*0.2;
        }else{
            $descuento=0;
        }
        $subtotal=round($total-$descuento,2);
        $servicio=round($subtotal*0.15,2);
        $igic=round(($subtotal+$servicio)*0.07,2);
        $pago=round($subtotal+$servicio+$igic,2);

            echo "
            <div class='container p-3'>
            <div class='row pt-2'>
                <div class='col-sm-7'></div>
                <div class='col-sm-1'><img src='img/logo.png'></div>
                <div class='col-sm-4'>
                <p><strong>Catering BITONOBIT</strong><br> 
                 Av. Reyes Católicos, Nº4<br>  
                 Santa Cruz de Tenerife <br> 
                 <strong>+34 922 20 00 00</strong></p>
                </div>
            </div>
            <div class='row '>
            <div class='col-sm-2'></div>
                <div class='col-sm-4 par01'>
                    <p>". $_POST['nombre'] ." ". $_POST['apellido'] ."</p>
                    <p>". $_POST['email'] ."</p>
                    <p>". $_POST['telefono'] ."</p>
                </div>
                <div class='col-sm-6'></div>
            </div>
            <div class='row sm-3 align-items-center'>
                <p class='text-success h1 text-center'>Presupuesto<p>
            </div>
            <div class='row'>
            <div class='col-sm-2'></div>
            <div class='col-sm-8'>
            <div class='table-responsive'>
              <table class='table table-borderless'>
              <thead class='table-success'>
              <tr>
                <th class='text-center'>Descripción</th>
                <th class='text-center'>Comensales</th>
                <th class='text-center'>Precio por persona</th>
                <th class='text-center'>Precio total</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class='text-end'>$menu &euro;</td>
                <td class='text-end'>$comensales &euro;</td>
                <td class='text-end'>$menu &euro;</td>
                <td class='text-end'>$total &euro;</td>
              </tr>
              <tr>
                <th colspan='2'> </th>
                <th class='text-end'>Subtotal</th>
                <td class='text-end'>$subtotal &euro;</td>
              </tr>
              <tr>
                <th colspan='2'> </th>
                <th class='text-end'>Descuento</th>
                <td class='text-end'>$descuento &euro;</td>
              </tr>
              <tr>
                <th colspan='2'> </th>
                <th class='text-end'>Servicio</th>
                <td class='text-end'>$servicio &euro;</td>
              </tr>
              <tr>
                <th colspan='2'> </th>
                <th class='text-end'>IGIC</th>
                <td class='text-end'>$igic &euro;</td>
              </tr>
              <tr>
                <th colspan='2'> </th>
                <th class='text-end'>Total</th>
                <td class='table-success text-end'>$pago &euro;</td>
              </tr>
            </tbody>
          </table>
          <div class='col-sm-2'></div>
          </div>
          </div>
          </div>
          </div>";

        }

        presupuesto();


}


include("includes/pie.php");        
?>
