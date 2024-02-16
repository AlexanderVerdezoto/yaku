<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('detalles/create'); ?>

            <div class="form-group">
                <label for="cantidad_det">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad_det" name="cantidad_det" placeholder="Ingrese la cantidad" required>
            </div>
            <br>
            
            <div class="form-group">
                <label for="detalle_det">Detalle:</label>
                <input type="text" class="form-control" id="detalle_det" name="detalle_det" placeholder="Ingrese el detalle" required>
            </div>
            <br>

            <div class="form-group">
                <label for="valor_unitario_det">Valor Unitario:</label>
                <input type="number" class="form-control" id="valor_unitario_det" name="valor_unitario_det" placeholder="Ingrese el valor unitario" required>
            </div>
            <br>

            <div class="form-group">
                <label for="detalle_det">Subtotal:</label>
                <input type="number" class="form-control" id="detalle_det" name="detalle_det" placeholder="Ingrese el subtotal" required>
            </div>
            <br>

            <div class="form-group">
                <label for="detalle_det">Iva:</label>
                <input type="number" class="form-control" id="detalle_det" name="detalle_det" placeholder="Ingrese el iva" required>
            </div>
            <br>

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
