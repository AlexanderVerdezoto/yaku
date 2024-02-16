<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Usuarios</h2>
        
        <table id="usuariosTable" class="table form-control">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Estado</th>
                    <th>Acciones</th>                
                </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario->id_usu; ?></td>
                        <td><?php echo $usuario->apellido_usu; ?></td>
                        <td><?php echo $usuario->nombre_usu; ?></td>
                        <td><?php echo $usuario->email_usu; ?></td>
                        <td><?php echo $usuario->password_usu; ?></td>
                        <td><?php echo $usuario->estado_usu; ?></td>
                        <td>
                            <a href="<?php echo site_url("Usuarios/edit/".$usuario->id_usu)?>" class="btn btn-primary">Editar</a>
                            <a href="<?php echo site_url("Usuarios/delete/".$usuario->id_usu)?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<script>
    $(document).ready( function () {
    $('#usuariosTable').DataTable();
} );
</script>
    

</div>