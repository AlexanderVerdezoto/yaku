<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Impuestos</h2>
        
        <table id="impuestosTable" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Porcentaje</th>
                    <th>Retencion</th>
                    <th>Estado</th>
                    <th>Creacion</th>
                    <th>Actualizacion</th>
                                            
                    <th>Acciones</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($impuestos as $impuesto) { ?>
                    <tr>
                        <td><?php echo $impuesto->id_imp; ?></td>
                        <td><?php echo $impuesto->nombre_imp; ?></td>
                        <td><?php echo $impuesto->descripcion_imp; ?></td>
                        <td><?php echo $impuesto->porcentaje_imp; ?></td>
                        <td><?php echo $impuesto->retencion_imp; ?></td>
                        <td><?php echo $impuesto->estado_imp; ?></td>
                        <td><?php echo $impuesto->creacion_imp; ?></td>
                        <td><?php echo $impuesto->actualizacion_imp; ?></td>

                        <td>
                            <a href="<?php echo site_url("Impuestos/edit/".$impuesto->id_imp)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Impuestos/delete/".$impuesto->id_imp)?>" class="btn btn-danger">Eliminar</a>
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
    $('#impuestosTable').DataTable();
} );
</script>
    

</div>