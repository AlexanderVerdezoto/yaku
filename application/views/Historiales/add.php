<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('historiales/create'); ?>
            
            <div class="form-group">
                <label for="estado_his">Estado:</label>
                <select class="form-control" id="estado_his" name="estado_his" required>
                    <option value="NUEVO">NUEVO</option>
                    <option value="USADO">USADO</option>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="observacion_his">Observación:</label>
                <input type="text" class="form-control" id="observacion_his" name="observacion_his" placeholder="Ingrese una observación" required>
            </div>
            <br>

            <div class="form-group">
                <label for="propietario_actual_his">Propietario:</label>
                <select class="form-control" id="propietario_actual_his" name="propietario_actual_his" required>
                    <option value="SÍ">SÍ</option>
                    <option value="NO">NO</option>
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
