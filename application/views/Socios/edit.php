<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Socio</h2>

            <?php echo form_open('socios/update/' . $socio->id_soc); ?>

            <div class="form-group">
                <label for="tipo_soc">Tipo:</label>
                <input type="text" class="form-control" id="tipo_soc" name="tipo_soc" value="<?php echo isset($socio->id_soc) ? $socio->id_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="identificacion_soc">Identificación Social:</label>
                <input type="number" class="form-control" id="identificacion_soc" name="identificacion_soc" value="<?php echo isset($socio->identificacion_soc) ? $socio->identificacion_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="primer_apellido_soc">Primer Apellido:</label>
                <input type="text" class="form-control" id="primer_apellido_soc" name="primer_apellido_soc" value="<?php echo isset($socio->primer_apellido_soc) ? $socio->primer_apellido_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="segundo_apellido_soc">Segundo Apellido:</label>
                <input type="text" class="form-control" id="segundo_apellido_soc" name="segundo_apellido_soc" value="<?php echo isset($socio->segundo_apellido_soc) ? $socio->segundo_apellido_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="nombres_soc">Nombres:</label>
                <input type="text" class="form-control" id="nombres_soc" name="nombres_soc" value="<?php echo isset($socio->nombres_soc) ? $socio->nombres_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="email_soc">Email:</label>
                <input type="email" class="form-control" id="email_soc" name="email_soc" value="<?php echo isset($socio->email_soc) ? $socio->email_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="telefono_soc">Teléfono:</label>
                <input type="number" class="form-control" id="telefono_soc" name="telefono_soc" value="<?php echo isset($socio->telefono_soc) ? $socio->telefono_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="direccion_soc">Dirección:</label>
                <input type="text" class="form-control" id="direccion_soc" name="direccion_soc" value="<?php echo isset($socio->direccion_soc) ? $socio->direccion_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="fecha_nacimiento_soc">Fecha de nacimiento:</label>
                <input type="date" class="form-control" id="fecha_nacimiento_soc" name="fecha_nacimiento_soc" value="<?php echo isset($socio->fecha_nacimiento_soc) ? $socio->fecha_nacimiento_soc : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="discapacidad_soc">Discapacidad:</label>
                <select class="form-control" id="discapacidad_soc" name="discapacidad_soc" required>
                    <option value="SÍ" <?php echo ($socio->discapacidad_soc == 'SÍ') ? 'selected' : ''; ?>>SÍ</option>
                    <option value="NO" <?php echo ($socio->discapacidad_soc == 'NO') ? 'selected' : ''; ?>>NO</option>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_soc">Estado:</label>
                <select class="form-control" id="estado_soc" name="estado_soc" required>
                    <option value="ACTIVO" <?php echo ($socio->estado_soc == 'ACTIVO') ? 'selected' : ''; ?>>ACTIVO</option>
                    <option value="INACTIVO" <?php echo ($socio->estado_soc == 'INACTIVO') ? 'selected' : ''; ?>>INACTIVO</option>
                </select>
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
