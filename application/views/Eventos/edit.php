<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Evento</h2>

            <?php echo form_open('eventos/update/' . $eventos->id_eve); ?>

            <div class="form-group">
                <label for="descripcion_eve">Descripción:</label>
                <input type="text" class="form-control" id="descripcion_eve" name="descripcion_eve" value="<?php echo isset($eventos->descripcion_eve) ? $eventos->descripcion_eve : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="fecha_hora_eve">Fecha y Hora:</label>
                <input type="datetime-local" class="form-control" id="fecha_hora_eve" name="fecha_hora_eve" value="<?php echo isset($eventos->fecha_hora_eve) ? $eventos->fecha_hora_eve : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="lugar_eve">Lugar:</label>
                <input type="text" class="form-control" id="lugar_eve" name="lugar_eve" value="<?php echo isset($eventos->lugar_eve) ? $eventos->lugar_eve : ''; ?>" required>
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
