<?php
 include("includes/encabezado.php");
 include("includes/menu.php");

#definir las clases
class Cliente {
	#define la clase cliente
	public $nombre;
	public $apellidos;
	private $dni;
	private $cuenta;
	function __construct(string $clinom, string $cliape, string $clidni, array $cuenta ){			
		#método constructor
		$this->nombre = $clinom;
		$this->apellido = $cliape;
		$this->dni = $clidni;
		$this->cuenta= $cuenta;
	}

	function set_cuenta(array $cuecli){
		$this->cuenta=$cuecli;
		return $this->cuenta;
	}

	function tabla(){
		#método tabla
	 	$nombreCompleto = $this->apellido . ", " . $this->nombre;
	 	$dni = $this->dni;
		$cuenta = $this->cuenta;
		$f = count($cuenta);
		// $this->r = 3;
		$this->t = "<table class='table-striped'><th colspan='3'>Clientes</th><th>Cuentas</th>";
		$this->t.="<tr><td>$nombreCompleto</td><td>$dni</td><td>";
		for ($i=0; $i<$f; $i++){
			"<tr>$cuenta[$i]</tr>";
		}
		$this->t.="</td></tr></table>";
	}
}

class CuentaBancaria {
	public $iban;
	public $entidad;
	public $oficina;
	public $control;
	public $cuenta;

	function __construct(string $iban, string $entidad, string $oficina, string $control, string $cuenta){
		$this->iban = $iban;
		$this->entidad = $entidad;
		$this->oficina = $oficina;
		$this->control = $control;
		$this->cuenta = $cuenta;
	}
}

// Obtiene las variables del formulario de clientes y verifico si existe
$existe=false;
$index="";
$o=new Cliente("" , "", "", []);
print_r($_SESSION["clientes"]);
foreach($_SESSION["clientes"] as $arrcli){
	foreach($arrcli as $cli){
		if($cli->dni==$_POST["dni"]){
			$existe=true;
			#consigue el indice donde esta
			$index=key($_SESSION["clientes"]);
			break;
		}
	}
	if($existe){break;}
}
if(!$existe){
	$clidni = $_POST["dni"];
	$clinom = $_POST["nombre"];
	$cliape = $_POST["apellido"];
	$clicue=[]; //vacío porque todavía no hay cuentas
	$obj= new Cliente($clinom , $cliape, $clidni, $clicue);
	array_push($_SESSION["clientes"], $obj);
	$obj->tabla();
}else{
	#aqui muestro lo que tiene el cliente y me preparo para agregar cuentas
	$o=$_SESSION["clientes"][$index];
	$o->tabla();
}

?>


<div class="container">     <!-- Empieza el contenedor -->
<div class='row pt-3 sm-3 align-items-center'>
    <p class='text-primary h1 text-center'>Cuentas<p>
</div>
<div class="row p-2">         <!-- Empieza la fila -->
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
    <form action="clientes.php" method="POST" class="form">	
		<legend><b>Datos de la Cuenta</b></legend>
		<label for="iban">IBAN:  </label><input type="text" name="iban" size="2">
		<label for="entidad">Entidad:  </label>:<input type="text" name="entidad" size="2">
		<label for="oficina">Oficina:  </label><input type="text" name="oficina" size="2">
		<label for="control">DC:  </label><input type="text" name="control" size="1">
		<label for="cuenta">Nº Cuenta:  </label>:<input type="text" name="cuenta" size="8"><br>
		<div class="mb-3 align-items-center p-3">
				<div class="col-auto">
					<select class="form-select"name="tipo" >
						<option selected>Selecciona el tipo de cuenta</option>
						<option name="tipo" value="corriente">Corriente</option>
						<option name="tipo" value="ahorro">Ahorro</option>
						<option name="tipo" value="crédito">Crédito</option>
					</select>
				</div>    
			</div>
		<input type="submit" name="btn2">
	</form>
	</div>    
</div>
</div>



<?php
$iban = $_POST["iban"];
$entidad = $_POST["entidad"];
$oficina = $_POST["oficina"];
$control = $_POST["control"];
$cuenta = $_POST["cuenta"];

$table = new Cliente($clinom, $cliape, $clidni);	//crea el objeto con parámetros porque usa el constructor
$table->tabla();									// Llama  al método tabla

$tableBanc = new CuentaBancaria($iban, $entidad, $oficina, $control,$cuenta);
$tableBanc->tablaBanc();


?>


<?php

if (isset($_POST['btn1'])) {



	# agrega los elementos al array de sesion 
	array_push($_SESSION["iban"],$_POST['iban']);
	array_push($_SESSION["entidad"],$_POST['entidad']);
	array_push($_SESSION["oficina"],$_POST['oficina']);
	array_push($_SESSION["control"],$_POST['control']);
	array_push($_SESSION["cuenta"],$_POST['cuenta']);
	array_push($_SESSION["dni"],$_POST['dni']);
	array_push($_SESSION["nombre"],$_POST['nombre']);
	array_push($_SESSION["apellidos"],$_POST['apellidos']);
	
}
# Muestra los clientes en la pantalla
echo "<h2> Listado de Clientes </h2> <hr>";
echo "<br>";

?>