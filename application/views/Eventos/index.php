<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Eventos</h2>
        
        <table id="eventosTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Descripcion</th>
                    <th>Fechahora</th>
                    <th>Lugar</th>
                    
                    <th>Acciones</th>

                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($eventos as $evento) { ?>
                    <tr>
                        <td><?php echo $evento->id_eve; ?></td>
                        <td><?php echo $evento->descripcion_eve; ?></td>
                        <td><?php echo $evento->fecha_hora_eve; ?></td>
                        <td><?php echo $evento->lugar_eve; ?></td>

                        
                        <td>
                            <a href="<?php echo site_url("Eventos/edit/".$evento->id_eve)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Eventos/delete/".$evento->id_eve)?>" class="btn btn-danger">Eliminar</a>
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
    $('#eventosTable').DataTable();
} );
</script>
    

</div>