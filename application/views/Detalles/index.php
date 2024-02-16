<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Detalles</h2>
        
        <table id="detallesTable" class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Lectura</th>
                    <th>Recaudación</th>
                    <th>Cantidad</th>
                    <th>Detalle</th>
                    <th>Valor Unitario</th>
                    <th>Subtotal</th>
                    <th>Iva</th>
                    <th>Acciones</th>  
                </tr>
            </thead>
            <tbody>
                <?php foreach ($detalles as $detalle) { ?>
                    <tr>
                        <td><?php echo $detalle->id_det; ?></td>
                        <td><?php echo $detalle->fk_id_lec; ?></td>
                        <td><?php echo $detalle->fk_id_rec; ?></td>
                        <td><?php echo $detalle->cantidad_det; ?></td>
                        <td><?php echo $detalle->detalle_det; ?></td>
                        <td><?php echo $detalle->valor_unitario_det; ?></td>
                        <td><?php echo $detalle->subtotal_det; ?></td>
                        <td><?php echo $detalle->iva_det; ?></td>
                        <td>
                            <a href="<?php echo site_url("Detalles/update/".$detalle->id_det)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Detalles/delete/".$detalle->id_det)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#detallesTable').DataTable();
} );
</script>
</div>