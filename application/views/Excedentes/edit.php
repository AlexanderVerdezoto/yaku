<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Excedente</h2>

            <?php echo form_open('excedentes/update/' . $excedentes->id_ex); ?>

            <div class="form-group">
                <label for="id_tar">Id Tarifa:</label>
                <input type="number" class="form-control" id="id_tar" name="id_tar" value="<?php echo isset($excedentes->id_tar) ? $excedentes->id_tar : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="limite_minimo_ex">Límite Mínimo:</label>
                <input type="number" class="form-control" id="limite_minimo_ex" name="limite_minimo_ex" value="<?php echo isset($excedentes->limite_minimo_ex) ? $excedentes->limite_minimo_ex : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="limite_maximo_ex">Límite Máximo:</label>
                <input type="number" class="form-control" id="limite_maximo_ex" name="limite_maximo_ex" value="<?php echo isset($excedentes->limite_maximo_ex) ? $excedentes->limite_maximo_ex : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="tarifa_ex">Tarifa:</label>
                <input type="float" class="form-control" id="tarifa_ex" name="tarifa_ex" value="<?php echo isset($excedentes->tarifa_ex) ? $excedentes->tarifa_ex : ''; ?>" required>
            </div>
            <br>
            
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
