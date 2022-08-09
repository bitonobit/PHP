<?php
class Tabla {
  private $mat=array();						// matriz bidimensional. $array["multi"]["dimensional"]["array"]
  private $colorFuente=array();
  private $colorFondo=array();
  private $cantFilas;
  private $cantColumnas;

  public function __construct($fi,$co)		// A partir de php 7 Sintaxis del constructor: void __construct ([ mixed $args = "" [, $... ]] )
  /*permite a los desarrolladores declarar métodos constructores para las clases.
  Aquellas que tengan un método constructor lo invocarán en cada nuevo objeto creado, 
  lo que lo hace idóneo para cualquier inicialización que el objeto pueda necesitar antes de ser usado.
  */
  {
    $this->cantFilas=$fi;				//núm. de filas y de columnas
    $this->cantColumnas=$co;
  }

  public function cargar($fila,$columna,$valor,$cfue,$cfon)
  {
    $this->mat[$fila][$columna]=$valor;
    $this->colorFuente[$fila][$columna]=$cfue;
    $this->colorFondo[$fila][$columna]=$cfon;
  }

  public function inicioTabla()
  {
    echo '<table border="1">';
  }

  public function inicioFila()
  {
    echo '<tr>';							//Hace las filas
  }

  public function mostrar($fi,$co)			//Hace las celdas
  {
    echo '<td style="color:'.$this->colorFuente[$fi][$co].';background-color:'.$this->colorFondo[$fi][$co].'">'.$this->mat[$fi][$co].'</td>';
  }

  public function finFila()
  {
    echo '</tr>';
  }

  public function finTabla()
  {
    echo '</table>';
  }

  public function graficar()		//Dibuja la tabla
  {
    $this->inicioTabla();
    for($f=1;$f<=$this->cantFilas;$f++)		//Ciclo para las filas
    {
      $this->inicioFila();
      for($c=1;$c<=$this->cantColumnas;$c++)		//Ciclo para las columnas
      {
         $this->mostrar($f,$c);
      }
      $this->finFila();
    }
    $this->finTabla();
  }
}

$tabla1=new Tabla(10,3);									               // Le doy las filas y las columnas
$tabla1->cargar(1,1,"Nombre","#ffffff","#8181F7");			// Le doy las caracteristicas del encabezado de la Tabla
$tabla1->cargar(1,2,"Apellido","#ffffff","#8181F7");
$tabla1->cargar(1,3,"DNI","#ffffff","#8181F7");

for($f=2;$f<=10;$f++)									              	//Le doy las caracteristicas del resto de la Tabla partir de la segunda fila
{
  $tabla1->cargar($f,1,"x","#9A2EFE","#FAFAFA");			//Columna i
  $tabla1->cargar($f,2,"x","#9A2EFE","#FAFAFA");
  $tabla1->cargar($f,3,"x","#9A2EFE","#FAFAFA");
}
$tabla1->graficar();			// dibujo la tabla
?>
