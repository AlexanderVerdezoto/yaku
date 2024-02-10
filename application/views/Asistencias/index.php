<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Asistencias</h2>
        
        <table id="asistenciasTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Id_evento</th>
                    <th>Id_socio</th>
                    <th>Tipo</th>
                    <th>Valor</th>
                    <th>Atraso</th>
                    <th>Valor Atraso</th>
                    <th>Creacion</th>
                    <th>Actualizacion</th>

                    
                    <th>Acciones</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($asistencias as $asistencia) { ?>
                    <tr>
                        <td><?php echo $asistencia->id_asi; ?></td>
                        <td><?php echo $asistencia->fk_id_eve; ?></td>
                        <td><?php echo $asistencia->fk_id_soc; ?></td>
                        <td><?php echo $asistencia->tipo_asi; ?></td>
                        <th><?php echo $asistencia->valor_asi; ?></th>
                        <td><?php echo $asistencia->atraso_asi; ?></td>
                        <td><?php echo $asistencia->valor_atraso_asi; ?></td>
                        <td><?php echo $asistencia->creacion_asi; ?></td>
                        <td><?php echo $asistencia->actualizacion_asi; ?></td>

                        
                        <td>
                            <a href="<?php echo site_url("Asistencias/edit/".$asistencia->id_asi)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Asistencias/delete/".$asistencia->id_asi)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
</div>



<script>
    $(document).ready( function () {
    $('#asistenciasTable').DataTable();
} );
</script>
    

</div>