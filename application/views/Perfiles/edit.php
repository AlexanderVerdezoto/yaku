<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Ruta</h2>

            <?php echo form_open('perfiles/update/' . $perfil->id_per); ?>

            <div class="form-group">
                <label for="nombre_per">Nombre:</label>
                <input type="text" class="form-control" id="nombre_per" name="nombre_per" value="<?php echo isset($perfil->nombre_per) ? $perfil->nombre_per : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="descripcion_per">Descripción:</label>
                <input type="text" class="form-control" id="descripcion_per" name="descripcion_per" value="<?php echo isset($perfil->descripcion_per) ? $perfil->descripcion_per : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_per">Estado:</label>
                <select class="form-control" id="estado_per" name="estado_per" required>
                    <option value="Activa" <?php echo $perfil->estado_per == 'Activa' ? 'selected' : ''; ?>>Activa</option>
                    <option value="Inactiva" <?php echo $perfil->estado_per == 'Inactiva' ? 'selected' : ''; ?>>Inactiva</option>
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
