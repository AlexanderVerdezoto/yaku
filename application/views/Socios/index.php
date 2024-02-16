<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Socios</h2>
        
        <table id="sociosTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Identificación social</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Nombres</th>
                    <th>Email</th>
                    <th>Telefono</th>
                    <th>Dirección</th>
                    <th>Fecha de Nacimiento</th>
                    <th>Discapacidad</th>
                    <th>Estado</th>
                    <th>Acciones</th>                
                </tr>
            </thead>
            <tbody>
            <?php foreach ($socios as $socio) { ?>
                    <tr>
                        <td><?php echo $socio->id_soc; ?></td>
                        <td><?php echo $socio->tipo_soc; ?></td>
                        <td><?php echo $socio->identificacion_soc; ?></td>
                        <td><?php echo $socio->primer_apellido_soc; ?></td>
                        <td><?php echo $socio->segundo_apellido_soc; ?></td>
                        <td><?php echo $socio->nombres_soc; ?></td>
                        <td><?php echo $socio->email_soc; ?></td>
                        <td><?php echo $socio->telefono_soc; ?></td>
                        <td><?php echo $socio->direccion_soc; ?></td>
                        <td><?php echo $socio->fecha_nacimiento_soc; ?></td>
                        <td><?php echo $socio->discapacidad_soc; ?></td>
                        <td><?php echo $socio->estado_soc; ?></td>
                        <td>
                            <a href="<?php echo site_url("Socios/edit/".$socio->id_soc)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Socios/delete/".$socio->id_soc)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#sociosTable').DataTable();
} );
</script>
    

</div>