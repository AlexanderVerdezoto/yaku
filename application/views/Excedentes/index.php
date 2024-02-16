<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Excedentes</h2>
        
        <table id="excedentesTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Id_Tarifa</th>
                    <th>Limite Minimo</th>
                    <th>Limite Maximo</th>
                    <th>Tarifa</th>
                    <th>Fecha Actualizacion</th>
                    <th>Fecha Creacion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($excedentes as $excedente) { ?>
                    <tr>
                        <td><?php echo $excedente->id_ex; ?></td>
                        <td><?php echo $excedente->id_tar; ?></td>
                        <td><?php echo $excedente->limite_minimo_ex; ?></td>
                        <td><?php echo $excedente->limite_maximo_ex; ?></td>
                        <th><?php echo $excedente->tarifa_ex; ?></th>
                        <td><?php echo $excedente->fecha_actualizacion_ex; ?></td>
                        <td><?php echo $excedente->fecha_creacion_ex; ?></td>
                        <td>
                            <a href="<?php echo site_url("Excedentes/edit/".$excedente->id_ex)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Excedentes/delete/".$excedente->id_ex)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready( function () {
    $('#excedentesTable').DataTable();
} );
</script>
    

</div>