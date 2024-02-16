<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Detalle</h2>

            <?php echo form_open('detalles/update/' . $detalle->id_det); ?>

            <div class="form-group">
                <label for="cantidad_det">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad_det" name="cantidad_det" value="<?php echo isset($detalle->cantidad_det) ? $detalle->cantidad_det : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="detalle_det">Detalle:</label>
                <input type="text" class="form-control" id="detalle_det" name="detalle_det" value="<?php echo isset($detalle->detalle_det) ? $detalle->detalle_det : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="valor_unitario_det">Valor Unitario:</label>
                <input type="number" class="form-control" id="valor_unitario_det" name="valor_unitario_det" value="<?php echo isset($detalle->valor_unitario_det) ? $detalle->valor_unitario_det : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="subtotal_det">Subtotal:</label>
                <input type="number" class="form-control" id="subtotal_det" name="subtotal_det" value="<?php echo isset($detalle->subtotal_det) ? $detalle->subtotal_det : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="iva_det">Iva:</label>
                <input type="number" class="form-control" id="iva_det" name="iva_det" value="<?php echo isset($detalle->iva_det) ? $detalle->iva_det : ''; ?>" required>
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
