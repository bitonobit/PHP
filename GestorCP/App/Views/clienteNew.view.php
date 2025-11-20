<form action="" id="clienteFormulario">
    <input type="hidden" name="" id=id value="<?= $parameters['cliente'][0]['id'] ?? '0' ?>">
    <div>
        <label for="nombre">Nombres</label>
        <input type="text" name="nombre" id="nombre" value="<?= $parameters['cliente'][0]['nombre'] ?? '' ?>">
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos" id="apellidos" value="<?= $parameters['cliente'][0]['apellidos'] ?? '' ?>">
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" id="direccion" value="<?= $parameters['cliente'][0]['direccion'] ?? '' ?>">
        <button type="submit">Guardar</button>
        <!-- <input type="submit" value="Guardar" name="submit"> -->
    </div>
</form>


<script src="<?= URL_PATH ?>/Assets/js/clienteNew.js"></script>