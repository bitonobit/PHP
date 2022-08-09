<?php 
 include("includes/encabezado.php");
 include("includes/menu.php");
 if( empty($_SESSION["clientes"])){		
     // si está vacía crea los arreglos en la  sesion
	$_SESSION["clientes"] = array();
 }
?>
	
<div class="container">     <!-- Empieza el contenedor -->
  <div class='row pt-3 sm-3 align-items-center'>
     <p class='text-primary h1 text-center'>Clientes<p>
  </div>
  <div class="row p-2">         <!-- Empieza la fila -->
   <div class="col-sm-3"></div>
   <div class="col-sm-6">
    <form action="procesarCliente.php" method="post" name="form1" class="card p-3">
        <div class="row mb-3 align-items-center">
        <div class="col-auto">
            <label for="Nombre" class="col-form-label">Nombre</label>
        </div>
        <div class="col-auto">
            <input type="text" class="form-control" name="nombre" required>
        </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <label for="apellido" class="col-form-label">Apellido</label>
            </div>
            <div class="col-auto">
                <input type="text" class="form-control" name="apellido" required>
            </div>
        </div> 
        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <label for="dni" class="col-form-label">DNI</label>
            </div>  
            <div class="col-auto"> 
                <input type="text" class="form-control" name="dni" required>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <label for="movil" class="col-form-label">Móvil</label>
            </div>
            <div class="col-auto">
                <input type="text" name="movil" class="form-control"> 
            </div>
            <div class="col-auto">
                <span class="form-text">
                (Opcional)
                </span>
            </div>
        </div> 
        <input type="submit" name="btn1" value="Registrar cuenta" class="btn btn-primary">
    </form>
  </div>
  <div class="col-sm-3"></div>
</div>  <!-- termina la fila -->
</div>  <!-- termina la contenedor -->

<?php
	include("includes/pie.php");
?>