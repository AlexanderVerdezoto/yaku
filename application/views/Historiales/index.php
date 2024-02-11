<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Historial Propietario</h2>
        
        <table id="historialesTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Id_Medidor</th>
                    <th>Id_Socio</th>
                    <th>Actualizacion</th>
                    <th>Estado</th>
                    <th>observacion</th>
                    <th>Fecha Cambio</th>
                    <th>Creacion</th>
                    <th>Propietario Actual</th>

                    
                    <th>Acciones</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historiales as $historial) { ?>
                    <tr>
                        <td><?php echo $historial->id_his; ?></td>
                        <td><?php echo $historial->fk_id_med; ?></td>
                        <td><?php echo $historial->fk_id_soc; ?></td>
                        <td><?php echo $historial->actualizacion_his; ?></td>
                        <th><?php echo $historial->estado_his; ?></th>
                        <td><?php echo $historial->observacion_his; ?></td>
                        <td><?php echo $historial->fecha_cambio_his; ?></td>
                        <td><?php echo $historial->creacion_his; ?></td>
                        <td><?php echo $historial->propietario_actual_his; ?></td>

                        
                        <td>
                            <a href="<?php echo site_url("Historiales/edit/".$historial->id_his)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Historiales/delete/".$historial->id_his)?>" class="btn btn-danger">Eliminar</a>
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
    $('#historialesTable').DataTable();
} );
</script>
    

</div>