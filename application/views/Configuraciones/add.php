<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h2 class="text-center">Agregar</h2>

            <?php echo form_open('configuraciones/create'); ?>

            <div class="form-group">
                <label for="nombre_con">Nombre:</label>
                <input type="text" class="form-control" id="nombre_con" name="nombre_con" placeholder="Ingrese el nombre" required>
            </div>
            <br>

            <div class="form-group">
                <label for="ruc_con">Ruc:</label>
                <input type="text" class="form-control" id="ruc_con" name="ruc_con" placeholder="Ingrese el ruc" required>
            </div>
            <br>

            <div class="form-group">
                <label for="logo_con">Logo:</label>
                <input type="text" class="form-control" id="logo_con" name="logo_con" placeholder="Ingrese el logo" required>
            </div>
            <br>

            <div class="form-group">
                <label for="telefono_con">Telefono:</label>
                <input type="number" class="form-control" id="telefono_con" name="telefono_con" placeholder="Ingrese el telefono" required>
            </div>
            <br>

            <div class="form-group">
                <label for="direccion_con">Direccion:</label>
                <input type="text" class="form-control" id="direccion_con" name="direccion_con" placeholder="Ingrese la direccion" required>
            </div>
            <br>

            <div class="form-group">
                <label for="email_con">Email:</label>
                <input type="email" class="form-control" id="email_con" name="email_con" placeholder="Ingrese el email" required>
            </div>
            <br>

            <div class="form-group">
                <label for="servidor_con">Servidor:</label>
                <input type="text" class="form-control" id="servidor_con" name="servidor_con" placeholder="Ingrese el servidor" required>  
            </div>
            <br>

            <div class="form-group">
                <label for="puerto_con">Puerto:</label>
                <input type="number" class="form-control" id="puerto_con" name="puerto_con" placeholder="Ingrese el puerto" required>
            </div>
            <br>

            <div class="form-group">
                <label for="password_con">Password:</label>
                <input type="text" class="form-control" id="password_con" name="password_con" placeholder="Ingrese el password" required>
            </div>
            <br>

            <div class="form-group">
                <label for="anio_inicial_con">Año Inicial:</label>
                <input type="number" class="form-control" id="anio_inicial_con" name="anio_inicial_con" placeholder="Ingrese el año inicial" required>
            </div>
            <br>

            <div class="form-group">
                <label for="mes_inicial_con">Mes Inicial:</label>
                <input type="text" class="form-control" id="mes_inicial_con" name="mes_inicial_con" placeholder="Ingrese el mes inicial" required>
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
