<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Rutas</h2>
        
        <table id="rutasTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Acciones</th>                
                </tr>
            </thead>
            <tbody>
            <?php foreach ($rutas as $ruta) { ?>
                    <tr>
                        <td><?php echo $ruta->id_rut; ?></td>
                        <td><?php echo $ruta->nombre_rut; ?></td>
                        <td><?php echo $ruta->descripcion_rut; ?></td>
                        <td><?php echo $ruta->estado_rut; ?></td>
                        <td>
                            <a href="<?php echo site_url("Rutas/edit/".$ruta->id_rut)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Rutas/delete/".$ruta->id_rut)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready( function () {
    $('#rutasTable').DataTable();
} );
</script>
    

</div>