<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Ruta</h2>

            <?php echo form_open('rutas/update/' . $ruta->id_rut); ?>

            <div class="form-group">
                <label for="nombre_rut">Nombre:</label>
                <input type="text" class="form-control" id="nombre_rut" name="nombre_rut" value="<?php echo isset($ruta->nombre_rut) ? $ruta->nombre_rut : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="descripcion_rut">Descripción:</label>
                <input type="text" class="form-control" id="descripcion_rut" name="descripcion_rut" value="<?php echo isset($ruta->descripcion_rut) ? $ruta->descripcion_rut : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="estado_rut">Estado:</label>
                <select class="form-control" id="estado_rut" name="estado_rut" required>
                    <option value="ACTIVO" <?php echo $ruta->estado_rut == 'ACTIVO' ? 'selected' : ''; ?>>ACTIVO</option>
                    <option value="INACTIVO" <?php echo $ruta->estado_rut == 'INACTIVO' ? 'selected' : ''; ?>>INACTIVO</option>
                </select>
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Actualizar</button>
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
