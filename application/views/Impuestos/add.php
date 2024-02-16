<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('impuestos/create'); ?>

            <div class="form-group">
                <label for="nombre_imp">Nombre:</label>
                <input type="text" class="form-control" id="nombre_imp" name="nombre_imp" placeholder="Ingrese el nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="descripcion_imp">Descripción:</label>
                <input type="text" class="form-control" id="descripcion_imp" name="descripcion_imp" placeholder="Ingrese la descripción" required>
            </div>
            <br>

            <div class="form-group">
                <label for="porcentaje_imp">Porcentaje:</label>
                <input type="text" class="form-control" id="porcentaje_imp" name="porcentaje_imp" placeholder="Ingrese el porcentaje" required>
            </div>
            <br>

            <div class="form-group">
                <label for="retencion_imp">Retención:</label>
                <input type="text" class="form-control" id="retencion_imp" name="retencion_imp" placeholder="Ingrese la retención" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_imp">Estado:</label>
                <select class="form-control" id="estado_imp" name="estado_imp" required>
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
