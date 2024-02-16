<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Consumos</h2>
        
        <table id="consumosTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Anio</th>
                    <th>Mes</th>
                    <th>Estado</th>
                    <th>Fecha Creacion</th>
                    <th>Fecha Actualizacion</th>
                    <th>Numero Mes</th>
                    <th>Fecha Vencimiento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($consumos as $consumo) { ?>
                    <tr>
                        <td><?php echo $consumo->id_consumo; ?></td>
                        <td><?php echo $consumo->anio_consumo; ?></td>
                        <td><?php echo $consumo->mes_consumo; ?></td>
                        <td><?php echo $consumo->estado_consumo; ?></td>
                        <th><?php echo $consumo->fecha_creacion_consumo; ?></th>
                        <td><?php echo $consumo->fecha_actualizacion_consumo; ?></td>
                        <td><?php echo $consumo->numero_mes_consumo; ?></td>
                        <td><?php echo $consumo->fecha_vencimiento_consumo; ?></td>
                        <td>
                            <a href="<?php echo site_url("Consumos/edit/".$consumo->id_consumo)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Consumos/delete/".$consumo->id_consumo)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('consumosTable').DataTable();
} );
</script>
    

</div>