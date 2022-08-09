<?php
    include("includes/encabezado.php");
    include("includes/menu.php");
?>

<div class="container">     <!-- Empieza el contenedor -->
  <div class='row pt-3 sm-3 align-items-center'>
     <p class='text-success h1 text-center'>Solicita un Presupuesto<p>
  </div>
  <div class="row p-2">         <!-- Empieza la fila -->
   <div class="col-sm-3"></div>
   <div class="col-sm-6">
    <form action="procesar.php" method="post" name="form1" class="card p-3">
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
                <label for="email" class="col-form-label">Correo-e</label>
            </div>  
            <div class="col-auto"> 
                <input type="email" class="form-control" name="email" required>
            </div>
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <label for="telefono" class="col-form-label">Teléfono</label>
            </div>
            <div class="col-auto">
                <input type="text" name="telefono" class="form-control"> 
            </div>
            <div class="col-auto">
                <span class="form-text">
                (Opcional)
                </span>
            </div>
        </div> 
        <div class="mb-3 align-items-center p-3">
            <div class="col-auto">
                <select class="form-select"name="menu" >
                    <option selected>Selecciona el menu</option>
                    <option name="menu" value="12.5">Uno</option>
                    <option name="menu" value="14">Dos</option>
                    <option name="menu" value="16.75">Tres</option>
                </select>
            </div>    
        </div>
        <div class="row mb-3 align-items-center">
            <div class="col-auto">
                <label for="Comensales" class="col-form-label">Comensales</label>
            </div>
            <div class="col-auto">
                <input type="number" class="form-control" name="comensales" required>
            </div>
            <div class="col-auto">
                <span class="form-text">
                (Descuentos: A partir de 100 personas 10%, a partir de 150 personas 20%)
                </span>
            </div>
        </div> 
        <div class="mb-3 form-check pt-5">
            <input type="checkbox" class="form-check-input" name="politica">
            <label class="form-check-label" for="politica">Acepto la política de datos</label>
        </div>
        <input type="submit" name="btn1" value="Solicitar presupuesto" class="btn btn-success">
    </form>
  </div>
  <div class="col-sm-3"></div>
</div>  <!-- termina la fila -->
</div>  <!-- termina la contenedor -->

<?php
    include("includes/pie.php");
?>