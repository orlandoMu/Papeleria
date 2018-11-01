<?php
$CI =& get_instance();
	if ($this->uri->segment(3) == 0) {
		$depo[0]['id'] = "";
		$depo[0]['nombre'] = "";
		$depo[0]['precio'] = "";
		$depo[0]['cantidad'] = "";
	}else{
		$CI->db->where('id', $this->uri->segment(3));
		$depo = $CI->db->get('deposito')->result_array();

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
				<h1 style="color: white">Papeleria</h1>

			</div>
		</div>

		<div class="row">
			<div class="col-md-4">
				<div class="panel panel default">
					<div class="panel-heading">Agregar Productos</div>
					<div class="panel-body">
						<form action="<?= base_url('index.php/depositoController/guardar') ?>" method="post">
						<!-- -------------------------------------------------- -->

							<div class="col-md-12 form-group input-group">
								<input type="HIDDEN" name="id" class="form-control" value="<?= $depo[0]['id'] ?>">
							</div>
						<!-- --------------------------------------------------------- -->
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Nombre del Producto</label>
								<input required type="text" name="nombre" class="form-control" value="<?= $depo[0]['nombre'] ?>">
							</div>
							<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Precio</label>
								<input required type="text" name="precio" class="form-control" value="<?= $depo[0]['precio'] ?>">
							</div>
								<div class="col-md-12 form-group input-group">
								<label for="" class="input-group-addon">Cantidad</label>
								<input required type="text" name="cantidad" class="form-control" value="<?= $depo[0]['cantidad'] ?>">
							</div>
							<div class="col-md-12 text-center">
								<button type="submit" class="btn btn-success" >Guardar Producto</button>

								<a href="<?= base_url("index.php/depositoController/guardar/0") ?>" class="btn btn-primary">Limpiar</a>
							</div>

						</form>
					</div>
				</div>
			</div>

			<div class="col-md-8">
				<div class="panel panel default">
					<div class="panel-heading">Inventario</div>
					<div class="panel-body">
						<table class="table table-hover table-striped">
							<thead>
								<th>Numero de Producto</th>
								<th>Producto</th>
								<th>Precio</th>
								<th>Cantidad</th>
								<th></th>
							</thead>
							<tbody>
								<?php
									$deposito = $CI->db->get('deposito')->result_array();

									foreach ($deposito as $depo) {

										$rutaEditar = base_url("index.php/depositoController/guardar/{$depo['id']}");
										$rutaBorrar = base_url("index.php/depositoController/borrar/{$depo['id']}");
										echo "<tr>
												<td>{$depo['id']}</td>
												<td>{$depo['nombre']}</td>
												<td>{$depo['precio']}</td>
												<td>{$depo['cantidad']}</td>

												<td>
													<a href='{$rutaEditar}' class='btn btn-info glyphicon glyphicon-pencil'></a>
													<a href='{$rutaBorrar}' onclick='return confirm(\"Deseas eliminar este Producto?\")'  class='btn btn-danger glyphicon glyphicon-remove'></a>
												</td>

										</tr>
										";
									}
								?>
							</tbody>
						</table>
					</div>
				</div>

		</div>
	</div>	
</body>
</html>
