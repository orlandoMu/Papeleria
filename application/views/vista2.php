<?php
$CI =& get_instance();
  if ($this->uri->segment(3) == 0) {
    $registro[0]['id_Usuarios'] = "";
    $registro[0]['nombreU'] = "";
    $registro[0]['apellidoU'] = "";
    $registro[0]['correo'] = "";
    $registro[0]['contrasena'] = "";
  }else{
    $CI->db->where('id_Usuarios', $this->uri->segment(3));
    $registro = $CI->db->get('Usuarios')->result_array();

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <meta charset="UTF-8">
  <title>Papeleria</title>

  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<style>
  tr {
    width: 100%;
    display: inline-table;
    table-layout: fixed;
  
  }

  table{
    height: 300px;
    display: -moz-groupbox;
    background-color: #B1E8E0;
  
  }
  tbody{
    overflow-y: scroll;
    height: 295px;
    width: 94%;
    position: absolute;
  

  }

  html{
    min-height: 100%;
    position: relative;

  }
  h1{
    font-size: 50px;
    color:#616161;
  }
  body{
    margin: 0;
    margin-bottom: 120px;
    background-color: #287781;
  }
  .panel-default{
    background-color: #287781;
    border: 1px solid #BDBDBD;
  }
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 100px;
    line-height: 100px;
    background-color: #424242;
  }
</style>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1 style="color: white">Registrate</h1>

      </div>
    </div>

    <div class="row">
      <div class="col-md-4">
        <div class="panel panel default">
          <div class="panel-heading">Usuario</div>
          <div class="panel-body">
            <form action="<?= base_url('index.php/RegistroController/guardar') ?>" method="post">
            <!-- -------------------------------------------------- -->

              <div class="col-md-12 form-group input-group">
                <input type="HIDDEN" name="id" class="form-control" value="<?= $registro[0]['id_Usuarios'] ?>">
              </div>
            <!-- --------------------------------------------------------- -->
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Nombre del Usuario</label>
                <input required type="text" name="nombre" class="form-control" value="<?= $registro[0]['nombreU'] ?>">
              </div>
              <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Apellido</label>
                <input required type="text" name="apellido" class="form-control" value="<?= $registro[0]['apellidoU'] ?>">
              </div>
                <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Correo</label>
                <input required type="text" name="correo" class="form-control" value="<?= $registro[0]['correo'] ?>">
              </div>
                            <div class="col-md-12 form-group input-group">
                <label for="" class="input-group-addon">Contraseña</label>
                <input required type="text" name="contrasena" class="form-control" value="<?= $registro[0]['contrasena'] ?>">
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-success" >Guardar</button>

                <a href="<?= base_url("index.php/RegistroController/guardar/0") ?>" class="btn btn-primary">Limpiar</a>
              </div>

            </form>
          </div>
        </div>
      </div>


  </div>  
</body>
</html>
