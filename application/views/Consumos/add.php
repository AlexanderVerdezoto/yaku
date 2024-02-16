<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('consumos/create'); ?>

            <div class="form-group">
                <label for="anio_consumo">Año:</label>
                <input type="text" class="form-control" id="anio_consumo" name="anio_consumo" placeholder="Ingrese el año" required>
            </div>
            <br>

            <div class="form-group">
                <label for="mes_consumo">Mes:</label>
                <input type="text" class="form-control" id="mes_consumo" name="mes_consumo" placeholder="Ingrese el mes" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_consumo">Estado:</label>
                <input type="text" class="form-control" id="estado_consumo" name="estado_consumo" placeholder="Ingrese el estado" required>
            </div>
            <br>

            <div class="form-group">
                <label for="numero_mes_consumo">Numero Mes:</label>
                <input type="text" class="form-control" id="numero_mes_consumo" name="numero_mes_consumo" placeholder="Ingrese el numero de mes" required>
            </div>
            <br>

            <div class="form-group">
                <label for="fecha_vencimiento_consumo">Fecha Vencimiento:</label>
                <input type="date" class="form-control" id="fecha_vencimiento_consumo" name="fecha_vencimiento_consumo" placeholder="Ingrese la fecha de vencimiento" required>
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
