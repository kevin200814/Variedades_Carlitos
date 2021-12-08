<style type="text/css">
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/button_style.css'; ?>">
<section class="home-section">
	<div class="container">
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Lista de productos en venta</h3>
			<br>
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>VentaController/index">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url(); ?>VentaController/index">Venta</a>
				</li>
			</ul>
			<br>
			<div class="scrollmenu">
				<div class="row" style="width: 2100px">
					<form method="POST", autocomplete="off" action="<?= base_url('VentaController/updateVenta')?>">

						<table id="example" class="table table-hover table-bordered">
							<thead class="thead-dark">
								<tr>
									<th>N. Lista</th>
									<th>N. Producto</th>
									<th>N. Salida</th>
									<th>Nombre de producto</th>
									<th>Categoria</th>
									<th>Color</th>
									<th>Genero</th>
									<th>Talla</th>
									<th>Marca</th>
									<th>Cantidad vendida</th>
									<th style="width: 200px;">Precio de venta</th>
									<th style="width: 200px;">Total Pago</th>
									<th></th>
								</tr>
							</thead>
							<tbody style="background-color:white;">
								<?php 
								if ( $lista ) {
										//echo "falso";
								}else{
									redirect('VentaController/index', 'refresh');
								}

								?>
								<?php foreach($lista as $l):  ?>

									<?php

									 	//$total += $l->TOTAL_DOCENA;

									?>

									<tr>
										<td><?=$l->ID_LISTA ?></td>
										<td><?=$l->ID_PRODUCTO ?></td>
										<td><?=$l->ID_SALIDA ?></td>
										<td><?=$l->NOMBRE_PRODUCTO ?></td>
										<td><?=$l->TIPO_CATEGORIA ?></td>
										<td><?=$l->NOMBRE_COLOR ?></td>
										<td><?=$l->TIPO_GENERO ?></td>
										<td><?=$l->TALLA ?></td>
										<td><?=$l->NOMBRE_MARCA ?></td>
										<td >
											<input type="hidden" name="id_lista[]" value="<?=$l->ID_LISTA ?>">
											<input type="hidden" name="id_salida[]" value="<?=$l->ID_SALIDA ?>">
											<input type="number" class="form-control" style="width: 50%;" name="cantidad[]" value="<?=$l->CANTIDAD_VENDIDA ?>" min="0" max="<?=$l->STOCK_ACTUAL ?>">
										</td>
										<td >

											<input type="number" step="any" class="form-control" style="width: 50%;" name="VENTA_FINAL[]" value="<?=$l->PRECIO_VENTA_FINAL ?>">
										</td>
										<td>
											<input type="number" step="any" readonly class="form-control" style="width: 50%;" name="TOTAL_A_CANCELAR[]" value="<?=$l->TOTAL_A_CANCELAR ?>">
										</td>
										<td>
											<!--	<a href="<?php echo base_url() . 'VentaController/updateInventario/' ?>" class="btn btn-primary editar"><i class="bi bi-pencil-square"></i></a>-->
											<a href="<?php echo base_url() . 'VentaController/eliminarProd/' . $l->ID_LISTA; ?>" class="btn btn-danger">
												<i class="bi bi-trash-fill"></i>
											</a>
										</td>
									</tr>

								<?php endforeach; ?>


								<tr>
									<td colspan="10" ></td>
									<td ><b>Total pago:</b></td>
									<td colspan="2" ><input type="number" step="any" readonly class="form-control" style="width: 50%;" name="total" value="<?= $l->TOTAL_FINAL   ?>"></td>
								</tr>
							</tbody>
						</table>
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="container">

			<br>
			<br>

			<input type="submit" name="Actualizar" class="btn btn-success" value="Actualizar lista">

		</form>
		<form action="<?php echo base_url(); ?>VentaController/registrarVenta" method="post" autocomplete="off">

			<?php

			date_default_timezone_set('UTC');
			$hoy = date('Y-m-d');

			?>

			<?php foreach($lista as $l):  ?>
				<br>
				<label>Fecha de Salida:</label>
				<input type="date" class="form-control" name="fecha_salida" value="<?php print_r($hoy); ?>"><br>


				<input type="hidden" name="ID_PRODUCTO_I[]" value="<?=$l->ID_PRODUCTO ?>">
				<input type="hidden" name="ID_LISTA[]" value="<?=$l->ID_LISTA ?>"> <!-- Lista -->

				<input type="hidden" name="ID_SALIDA_S[]" value="<?=$l->ID_SALIDA ?>"> <!-- SALIDA -->

				<input type="hidden" step="any"  name="STOCK_ACTUAL[]" value="<?=$l->STOCK_ACTUAL ?>"> <!-- STOCK_ACTUAL -->

				<input type="hidden"  name="CANTIDAD_SALIDA[]" value="<?=$l->CANTIDAD_VENDIDA ?>"> <!-- CANTIDAD -->

				<input type="hidden" step="any" name="VENTA_FINAL_S[]" value="<?=$l->PRECIO_VENTA_FINAL ?>"> <!-- VENTA -->

				<input type="hidden" step="any"  name="TOTAL_A_CANCELAR_S[]" value="<?=$l->TOTAL_A_CANCELAR ?>"> <!-- TOTAL CANCELAR -->

			<?php endforeach; ?>
			<input type="hidden" step="any"  name="TOTAL_FINAL_S" value="<?= $l->TOTAL_FINAL   ?>"> <!-- TOTAL FINAL -->
			<br>
			<input type="submit" name="Siguiente" class="btn btn-primary" value="Guardar venta">

		</div>
	</form>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>