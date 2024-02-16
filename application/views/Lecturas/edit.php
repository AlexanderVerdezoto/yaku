<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Lectura</h2>

            <?php echo form_open('lecturas/update/' . $lectura->id_lec); ?>

            <div class="form-group">
                <label for="anio_lec">Año:</label>
                <input type="text" class="form-control" id="anio_lec" name="anio_lec" value="<?php echo isset($lectura->anio_lec) ? $lectura->anio_lec : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="mes_lec">Mes:</label>
                <input type="text" class="form-control" id="mes_lec" name="mes_lec" value="<?php echo isset($lectura->mes_lec) ? $lectura->mes_lec : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_lec">Estado:</label>
                <input type="text" class="form-control" id="estado_lec" name="estado_lec" value="<?php echo isset($lectura->estado_lec) ? $lectura->estado_lec : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="lectura_anterior_lec">Lectura Anterior:</label>
                <input type="text" class="form-control" id="lectura_anterior_lec" name="lectura_anterior_lec" value="<?php echo isset($lectura->lectura_anterior_lec) ? $lectura->lectura_anterior_lec : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="lectura_actual_lec">Lectura Actual:</label>
                <input type="text" class="form-control" id="lectura_actual_lec" name="lectura_actual_lec" value="<?php echo isset($lectura->lectura_actual_lec) ? $lectura->lectura_actual_lec : ''; ?>" required>
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
