<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('usuarios/create'); ?>

            <div class="form-group">
                <label for="apellido_usu">Apellido:</label>
                <input type="text" class="form-control" id="apellido_usu" name="apellido_usu" placeholder="Ingrese el apellido" required>
            </div>
            <br>

            <div class="form-group">
                <label for="nombre_usu">Nombre:</label>
                <input type="text" class="form-control" id="nombre_usu" name="nombre_usu" placeholder="Ingrese el nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="email_usu">Email:</label>
                <input type="email" class="form-control" id="email_usu" name="email_usu" placeholder="Ingrese el email" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password_usu">Contraseña:</label>
                <input type="password" class="form-control" id="password_usu" name="password_usu" placeholder="Ingrese la contraseña" required>
            </div>
            <br>

            <div class="form-group">
                <label for="estado_usu">Estado:</label>
                <select class="form-control" id="estado_usu" name="estado_usu" required>
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
