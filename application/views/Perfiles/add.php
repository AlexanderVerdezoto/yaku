<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('perfiles/create'); ?>

            <div class="form-group">
                <label for="nombre_per">Nombre:</label>
                <input type="text" class="form-control" id="nombre_per" name="nombre_per" placeholder="Ingrese el nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="descripcion_per">Descripción:</label>
                <input type="text" class="form-control" id="descripcion_per" name="descripcion_per" placeholder="Ingrese la descripción" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_per">Estado:</label>
                <select class="form-control" id="estado_per" name="estado_per" required>
                    <option value="Activa">Activa</option>
                    <option value="Inactiva">Inactiva</option>
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
