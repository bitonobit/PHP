<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Clientes & Banca</title>
	<style>
		table {
			float: left;
			margin-right: 20px;
		}
	</style>
</head>

<body>
<?php

	// Obtiene las variables de la sesion
	$clidni = $_SESSION["dni"];
	$clinom = $_SESSION["nombre"];
	$cliape = $_SESSION["apellidos"];

	$iban = $_SESSION["iban"];
	$entidad = $_SESSION["entidad"];
	$oficina = $_SESSION["oficina"];
	$control = $_SESSION["control"];
	$cuenta = $_SESSION["cuenta"];

// define la clase cliente

class Cliente {
	public $nombre;
	public $apellidos;
	private $dni;

	function __construct(array $clinom, array $cliape, array $clidni ){			// utiliza el método constructor
		$this->_getarray1 = $clinom;
		$this->_getarray2 = $cliape;
		$this->_getarray3 = $clidni;

	}

	 function tabla(){

	 	$nombre = $this->_getarray1;
	 	$apellidos = $this->_getarray2;
	 	$dni = $this->_getarray3;
		$this->f = 10;
		$this->r = 3;
		echo "<table border='1'>";
		echo "<th colspan='4'> Clientes";
		for ($i=0; $i<count($dni); $i++){
		echo "<tr><td>$nombre[$i]</td><td>$apellidos[$i]</td><td>$dni[$i]</td></tr>";
		//echo "<tr><td>X</td><td>A</td><td>Z</td></tr>";
	}
		echo "</th>";
		echo "</table>";
	}
}

class CuentaBancaria {
	public $iban;
	public $entidad;
	public $oficina;
	public $control;
	public $cuenta;

	function __construct(array $iban, array $entidad, array $oficina, array $control, array $cuenta){
		$this->_getarray1 = $iban;
		$this->_getarray2 = $entidad;
		$this->_getarray3 = $oficina;
		$this->_getarray4 = $control;
		$this->_getarray5 = $cuenta;

	}

	function tablaBanc(){
		$this->f=10;
		$this->r=5;
		$iban = $this->_getarray1;
		$entidad= $this->_getarray2;
		$oficina = $this->_getarray3 ;
		$control = $this->_getarray4 ;
		$cuenta = $this->_getarray5;
		echo "<table border='1'>";
		echo "<th colspan='6'>Cuentas";
		for ($j=0; $j<count($iban); $j++){
		echo "<tr><td>$iban[$j]</td><td>$entidad[$j]</td><td>$oficina[$j]</td><td>$control[$j]</td><td>$cuenta[$j]</td></tr>";

		}
		echo "</th>";
		echo "</table>";

	}


}

$table = new Cliente($clinom, $cliape, $clidni);	//crea el objeto con parámetros porque usa el constructor
$table->tabla();									// Llama  al método tabla

$tableBanc = new CuentaBancaria($iban, $entidad, $oficina, $control,$cuenta);
$tableBanc->tablaBanc();


?>


</body>
</html>
