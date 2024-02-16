<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Configuraciones</h2>
        
        <table id="configuracionesTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ruc</th>
                    <th>Logo</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Email</th>
                    <th>Servidor</th>
                    <th>Puerto</th>
                    <th>Password</th>
                    <th>Creacion</th>
                    <th>Actualizacion</th>
                    <th>AnioInicial</th>
                    <th>MesInicial</th>
                    <th>Acciones</th>  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($configuraciones as $configuracion) { ?>
                    <tr>
                        <td><?php echo $configuracion->id_con; ?></td>
                        <td><?php echo $configuracion->nombre_con; ?></td>
                        <td><?php echo $configuracion->ruc_con; ?></td>
                        <td><?php echo $configuracion->logo_con; ?></td>
                        <td><?php echo $configuracion->telefono_con; ?></td>
                        <td><?php echo $configuracion->direccion_con; ?></td>
                        <td><?php echo $configuracion->email_con; ?></td>
                        <td><?php echo $configuracion->servidor_con; ?></td>
                        <td><?php echo $configuracion->puerto_con; ?></td>
                        <td><?php echo $configuracion->password_con; ?></td>
                        <td><?php echo $configuracion->creacion_con; ?></td>
                        <td><?php echo $configuracion->actualizacion_con; ?></td>
                        <td><?php echo $configuracion->anio_inicial_con; ?></td>
                        <td><?php echo $configuracion->mes_inicial_con; ?></td>
                        <td>
                            <a href="<?php echo site_url("Configuraciones/edit/".$configuracion->id_con)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Configuraciones/delete/".$configuracion->id_con)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#configuracionesTable').DataTable();
} );
</script>
    

</div>