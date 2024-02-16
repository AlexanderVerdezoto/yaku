<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Editar Usuario</h2>

            <?php echo form_open('usuarios/update/' . $usuario->id_usu); ?>

            <div class="form-group">
                <label for="apellido_usu">APELLIDO:</label>
                <input type="text" class="form-control" id="apellido_usu" name="apellido_usu" value="<?php echo isset($usuario->apellido_usu) ? $usuario->apellido_usu : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="nombre_usu">NOMBRE:</label>
                <input type="text" class="form-control" id="nombre_usu" name="nombre_usu" value="<?php echo isset($usuario->nombre_usu) ? $usuario->nombre_usu : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="email_usu">EMAIL:</label>
                <input type="email" class="form-control" id="email_usu" name="email_usu" value="<?php echo isset($usuario->email_usu) ? $usuario->email_usu : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password_usu">CONTRASEÑA:</label>
                <input type="password" class="form-control" id="password_usu" name="password_usu" value="<?php echo isset($usuario->password_usu) ? $usuario->password_usu : ''; ?>" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_usu">ESTADO:</label>
                <select class="form-control" id="estado_usu" name="estado_usu" required>
                    <option value="ACTIVO" <?php echo ($usuario->estado_usu == 'ACTIVO') ? 'selected' : ''; ?>>ACTIVO</option>
                    <option value="INACTIVO" <?php echo ($usuario->estado_usu == 'INACTIVO') ? 'selected' : ''; ?>>INACTIVO</option>
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
