<head>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
  
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
</head>
<div class="body-wrapper">
    <div class="container-fluid">
        <h2>Agregar Medidor</h2>
<form action="<?php echo site_url("medidores/upload")?>" method="POST" enctype="multipart/form-data">
    <label for="">Ruta</label>
    <select class="form-control" name="fk_id_rut" id="fk_id_rut">
        <?php foreach ($rutas as $ruta) { ?>
            <option value="<?php echo $ruta->id_rut; ?>"><?php echo $ruta->nombre_rut; ?></option>
        <?php } ?>
    </select>
    <label for="">Tarifa</label>
    <select class="form-control" name="fk_id_tar" id="fk_id_tar">
        <?php foreach ($tarifas as $tarifa) { ?>
            <option value="<?php echo $tarifa->id_tar; ?>"><?php echo $tarifa->nombre_tar; ?></option>
        <?php } ?>
    </select>
    <label for="">Numero</label>
    <input required class="form-control" type="text" name="numero_med" placeholder="numero_med">
    <label for="">Serie</label>
    <input required class="form-control" type="text" name="serie_med" placeholder="serie_med">
    <label for="">Marca</label>
    <input required class="form-control" type="text" name="marca_med" placeholder="marca_med">
    <label for="">Observacion</label>
    <input required class="form-control" type="text" name="observacion_med" placeholder="observacion_med">
    <label for="">Estado</label>
    <input required class="form-control" type="text" name="estado_med" placeholder="estado_med">
    <!-- <label for="">Foto</label>
    <input required class="form-control" type="file" name="foto_med"> -->
    <label for="">Lectura Inicial</label>
    <input required class="form-control" type="text" name="lectura_inicial_med" placeholder="lectura_inicial_med">
    
    <input type="submit" value="Agregar" class="btn btn-primary">
</form>
        
        
    </div>
</div>




    

</div>