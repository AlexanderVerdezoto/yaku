<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('socios/create'); ?>

            <div class="form-group">
                <label for="tipo_soc">Tipo:</label>
                <input type="text" class="form-control" id="tipo_soc" name="tipo_soc" placeholder="Ingrese el tipo" required>
            </div>
            <br>

            <div class="form-group">
                <label for="identificacion_soc">Identificación Social:</label>
                <input type="number" class="form-control" id="identificacion_soc" name="identificacion_soc" placeholder="Ingrese la identificación social" required>
            </div>
            <br>

            <div class="form-group">
                <label for="primer_apellido_soc">Primer Apellido:</label>
                <input type="text" class="form-control" id="primer_apellido_soc" name="primer_apellido_soc" placeholder="Ingrese el primer apellido" required>
            </div>
            <br>

            <div class="form-group">
                <label for="segundo_apellido_soc">Segundo Apellido:</label>
                <input type="text" class="form-control" id="segundo_apellido_soc" name="segundo_apellido_soc" placeholder="Ingrese el segundo apellido" required>
            </div>
            <br>

            <div class="form-group">
                <label for="nombres_soc">Nombres:</label>
                <input type="text" class="form-control" id="nombres_soc" name="nombres_soc" placeholder="Ingrese la identificación social" required>
            </div>
            <br>

            <div class="form-group">
                <label for="email_soc">Email:</label>
                <input type="email" class="form-control" id="email_soc" name="email_soc" placeholder="Ingrese el email" required>
            </div>
            <br>
            <div class="form-group">
                <label for="telefono_soc">Teléfono:</label>
                <input type="number" class="form-control" id="telefono_soc" name="telefono_soc" placeholder="Ingrese el número de teléfono" required>
            </div>
            <br>
            <div class="form-group">
                <label for="direccion_soc">Dirección:</label>
                <input type="text" class="form-control" id="direccion_soc" name="direccion_soc" placeholder="Ingrese la dirección" required>
            </div>
            <br>
            <div class="form-group">
                <label for="fecha_nacimiento_soc">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento_soc" name="fecha_nacimiento_soc" placeholder="Seleccione la fecha de nacimiento" required>
            </div>
            <br>
            
            <div class="form-group">
                <label for="discapacidad_soc">Discapacidad:</label>
                <select class="form-control" id="discapacidad_soc" name="discapacidad_soc" required>
                    <option value="SÍ">SÍ</option>
                    <option value="NO">NO</option>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_soc">Estado:</label>
                <select class="form-control" id="estado_soc" name="estado_soc" required>
                    <option value="ACTIVO">ACTIVO</option>
                    <option value="INACTIVO">INACTIVO</option>
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
