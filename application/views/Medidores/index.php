<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Medidores</h2>
        
        <table id="medidoresTable" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Numero</th>
                    <th>Serie</th>
                    <th>Marca</th>
                    <th>Observacion</th>
                    <th>Estado</th>
                    
                    <th>Acciones</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($medidores as $medidor) { ?>
                    <tr>
                        <td><?php echo $medidor->id_med; ?></td>
                        <td><?php echo $medidor->numero_med; ?></td>
                        <td><?php echo $medidor->serie_med; ?></td>
                        <td><?php echo $medidor->marca_med; ?></td>
                        <td><?php echo $medidor->observacion_med; ?></td>
                        <td><?php echo $medidor->estado_med; ?></td>
                        
                        <td>
                            <a href="<?php echo site_url("Medidores/update/".$medidor->id_med)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Medidores/delete/".$medidor->id_med)?>" class="btn btn-danger">Eliminar</a>
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
    $('#medidoresTable').DataTable();
} );
</script>
    

</div>