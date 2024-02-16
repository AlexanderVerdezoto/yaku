<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Lecturas</h2>
        
        <table id="lecturasTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Año</th>
                    <th>Mes</th>
                    <th>Estado</th>
                    <th>Lectura Anterior</th>
                    <th>Lectura Actual</th>
                    <th>Fecha de Creación</th>
                    <th>Fecha de Actualización</th>
                    <th>Acciones</th>                
                </tr>
            </thead>
            <tbody>
            <?php foreach ($lecturas as $lectura) { ?>
                    <tr>
                        <td><?php echo $lectura->id_lec; ?></td>
                        <td><?php echo $lectura->anio_lec; ?></td>
                        <td><?php echo $lectura->mes_lec; ?></td>
                        <td><?php echo $lectura->estado_lec; ?></td>
                        <td><?php echo $lectura->lectura_anterior_lec; ?></td>
                        <td><?php echo $lectura->lectura_actual_lec; ?></td>
                        <td><?php echo $lectura->fecha_creacion_lec; ?></td>
                        <td><?php echo $lectura->fecha_actualizacion_lec; ?></td>
                        <td>
                            <a href="<?php echo site_url("Lecturas/edit/".$lectura->id_lec)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Lecturas/delete/".$lectura->id_lec)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready( function () {
    $('#lecturasTable').DataTable();
} );
</script>
    

</div>