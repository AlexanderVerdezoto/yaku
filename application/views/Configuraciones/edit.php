<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Configuración</h2>

            <?php echo form_open('configuraciones/update/' . $configuracion->id_con); ?>

            <div class="form-group">
                <label for="nombre_con">Nombre:</label>
                <input type="text" class="form-control" id="nombre_con" name="nombre_con" value="<?php echo isset($configuracion->nombre_con) ? $configuracion->nombre_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="ruc_con">Ruc:</label>
                <input type="text" class="form-control" id="ruc_con" name="ruc_con" value="<?php echo isset($configuracion->ruc_con) ? $configuracion->ruc_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="logo_con">Logo:</label>
                <input type="text" class="form-control" id="logo_con" name="logo_con" value="<?php echo isset($configuracion->logo_con) ? $configuracion->logo_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="telefono_con">Telefono:</label>
                <input type="text" class="form-control" id="telefono_con" name="telefono_con" value="<?php echo isset($configuracion->telefono_con) ? $configuracion->telefono_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="direccion_con">Direccion:</label>
                <input type="text" class="form-control" id="direccion_con" name="direccion_con" value="<?php echo isset($configuracion->direccion_con) ? $configuracion->direccion_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="email_con">Email:</label>
                <input type="text" class="form-control" id="email_con" name="email_con" value="<?php echo isset($configuracion->email_con) ? $configuracion->email_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="servidor_con">Servidor:</label>
                <input type="text" class="form-control" id="servidor_con" name="servidor_con" value="<?php echo isset($configuracion->servidor_con) ? $configuracion->servidor_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="puerto_con">Puerto:</label>
                <input type="text" class="form-control" id="puerto_con" name="puerto_con" value="<?php echo isset($configuracion->puerto_con) ? $configuracion->puerto_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="password_con">Password:</label>
                <input type="text" class="form-control" id="password_con" name="password_con" value="<?php echo isset($configuracion->password_con) ? $configuracion->password_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="anio_inicial_con">Año Inicial:</label>
                <input type="number" class="form-control" id="anio_inicial_con" name="anio_inicial_con" value="<?php echo isset($configuracion->anio_inicial_con) ? $configuracion->anio_inicial_con : ''; ?>" required>
            </div>

            <div class="form-group">
                <label for="mes_inicial_con">Mes Inicial:</label>
                <input type="text" class="form-control" id="mes_inicial_con" name="mes_inicial_con" value="<?php echo isset($configuracion->mes_inicial_con) ? $configuracion->mes_inicial_con : ''; ?>" required>
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
