<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Perfiles</h2>
        
        <table id="perfilesTable" class="table form-control">
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
            <?php foreach ($perfiles as $perfil) { ?>
                    <tr>
                        <td><?php echo $perfil->id_per; ?></td>
                        <td><?php echo $perfil->nombre_per; ?></td>
                        <td><?php echo $perfil->descripcion_per; ?></td>
                        <td><?php echo $perfil->estado_per; ?></td>
                        <td><?php echo $perfil->creacion_per; ?></td>
                        <td><?php echo $perfil->actualizacion_per; ?></td>
                        <td>
                            <a href="<?php echo site_url("Perfiles/edit/".$perfil->id_per)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Perfiles/delete/".$perfil->id_per)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready( function () {
    $('#perfilesTable').DataTable();
} );
</script>
    

</div>