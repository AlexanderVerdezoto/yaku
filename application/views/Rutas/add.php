<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('rutas/create'); ?>

            <div class="form-group">
                <label for="nombre_rut">Nombre:</label>
                <input type="text" class="form-control" id="nombre_rut" name="nombre_rut" placeholder="Ingrese el nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="descripcion_rut">Descripción:</label>
                <input type="text" class="form-control" id="descripcion_rut" name="descripcion_rut" placeholder="Ingrese la descripción" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_rut">Estado:</label>
                <select class="form-control" id="estado_rut" name="estado_rut" required>
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="INACTIVO">INACTIVO</option>
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Agregar</button>
            <button type="button" class="btn btn-danger" onclick="goBack()">Cancelar</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

<script>
    function goBack() {
        window.history.back();
    }
</script>
