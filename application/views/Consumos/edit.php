<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Consumo</h2>

            <?php echo form_open('consumos/update/' . $consumo->id_consumo); ?>

            <div class="form-group">
                <label for="anio_consumo">Año:</label>
                <input type="text" class="form-control" id="anio_consumo" name="anio_consumo" value="<?php echo isset($consumo->anio_consumo) ? $consumo->anio_consumo : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="mes_consumo">Mes:</label>
                <input type="text" class="form-control" id="mes_consumo" name="mes_consumo" value="<?php echo isset($consumo->mes_consumo) ? $consumo->mes_consumo : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_consumo">Estado:</label>
                <input type="text" class="form-control" id="estado_consumo" name="estado_consumo" value="<?php echo isset($consumo->estado_consumo) ? $consumo->estado_consumo : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="numero_mes_consumo">Numero Mes:</label>
                <input type="text" class="form-control" id="numero_mes_consumo" name="numero_mes_consumo" value="<?php echo isset($consumo->numero_mes_consumo) ? $consumo->numero_mes_consumo : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="fecha_vencimiento_consumo">Fecha Vencimiento:</label>
                <input type="date" class="form-control" id="fecha_vencimiento_consumo" name="fecha_vencimiento_consumo" value="<?php echo isset($consumo->fecha_vencimiento_consumo) ? $consumo->fecha_vencimiento_consumo : ''; ?>" required>
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
