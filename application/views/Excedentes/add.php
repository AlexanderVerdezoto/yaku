<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('excedentes/create'); ?>

            <div class="form-group">
                <label for="id_tar">Id Tarifa:</label>
                <input type="text" class="form-control" id="id_tar" name="id_tar" placeholder="Ingrese el id de la tarifa" required>
            </div>
            <br>
            
            <div class="form-group">
                <label for="limite_minimo_ex">Límite Mínimo:</label>
                <input type="number" class="form-control" id="limite_minimo_ex" name="limite_minimo_ex" placeholder="Ingrese el límite minimo" required>
            </div>
            <br>

            <div class="form-group">
                <label for="limite_maximo_ex">Límite Máximo:</label>
                <input type="number" class="form-control" id="limite_maximo_ex" name="limite_maximo_ex" placeholder="Ingrese el límite maximo" required>
            </div>
            <br>
            
            <div class="form-group">
                <label for="tarifa_ex">Tarifa:</label>
                <input type="decimal" class="form-control" id="tarifa_ex" name="tarifa_ex" placeholder="Ingrese la tarifa" required>
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
