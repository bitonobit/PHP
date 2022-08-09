<!DOCTYPE html>
<html>
<head>
  <title>Práctica de Objetos</title>
</head>
<body>
  <!-- Ejercicio: para 1 Cliente y una cuenta -->
  <h2><font color="blue">Imformacion del cliente </font></h2>
  <h3><strong>Introduzca sus datos: </strong><br>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
      Nombre:  <input type="text" name="nombre">   
      Apellidos: <input type="text" name="apellidos"> 
      DNI: <input type="text" name="dni">
      Cuenta bancaria: <input type="text" name="cuenta" size=50 placeholder="IBAN-0000-0000-00-0000000000">
      <br>   
      <input type="submit" name="enviar" value="enviar"> 
  </form>
<br>
<?php
class cliente{
  #Atributos
  protected $nombre;
  protected $apellido;
  protected $DNI;
  //Método constructor
  public function __construct($nom,$apell,$dni) {
    $this->nombre = $nom;
    $this->apellido = $apell;
    $this->DNI = $dni;
  }
  //Métodos
  public function imprimirClientes($tabla){
    echo $tabla;
  }
}

 class cuentabco {
    protected $cuenta;
    
    public function __construct($cuenta) {
      $this->cuenta = $cuenta;
    }
    
    public function imprimirCuentas($tabla){
      echo $tabla;
    } 
  }

class tabla {
  public $cliente=array();
  public $cantFilas;
  public $cantColumnas;

  public function __construct($fi,$co)  {
    $this->cantFilas=$fi;
    $this->cantColumnas=$co;
  }
  public function cargar($fila,$columna,$valor)  {
    $this->cliente[$fila][$columna]=$valor;
  }
  public function inicioTabla()  {
    echo '<table border="1">';
  }
  public function inicioFila()  {
    echo '<tr>';        
  }
  public function mostrar($fi,$co){
    echo '<td>'.$this->cliente[$fi][$co].'</td>';
  }
  public function finFila()  {
    echo '</tr>';
  }
  public function finTabla()  {
    echo '</table>';
  }
  public function graficar()  {
    $this->inicioTabla();
      for($f=1;$f<=$this->cantFilas;$f++)   {
    $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++) {
    $this->mostrar($f,$c);
    }
    $this->finFila();
    }
    $this->finTabla();
    }
  }

$tabla1=new tabla(2,4);        
$tabla1->cargar(1,1,"NOMBRE");      
$tabla1->cargar(1,2,"APELLIDO");
$tabla1->cargar(1,3,"DNI");+
$tabla1->cargar(1,4,"CUENTA");


for($f=2;$f<=2;$f++){
  $tabla1->cargar($f,1, $_POST['nombre']);
  $tabla1->cargar($f,2, $_POST['apellidos']);
  $tabla1->cargar($f,3, $_POST['dni']);
  $tabla1->cargar($f,4, $_POST['cuenta']);
}



$tabla1->graficar();      // dibujo la tabla

?>
</body>
</html>