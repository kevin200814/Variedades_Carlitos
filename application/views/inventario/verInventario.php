<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/button_style.css'; ?>">
<section class="home-section">

	
	<div class="container">
		
		<div class="col-12 col-sm-12 col-md-12 col-lg-12">
			<h3>Lista de Nuevo Inventario</h3>
			<br>
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a class="nav-link" href="<?php echo base_url(); ?>InventarioController/inicio">Productos</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url(); ?>InventarioController/index">Inventario</a>
				</li>
			</ul>
			<hr>
			
			<div class="scrollmenu">
				<div class="row" style="width: 1900px">
					<form method="POST", autocomplete="off" action="<?= base_url('InventarioController/updateInventario')?>">

						<table id="example" class="table table-hover table-bordered">
							<thead class="thead-dark">
								<tr>
									<th>N. Lista</th>
									<th>Id producto</th>
									<th>Nombre de producto</th>
									<th>Categoria</th>
									<th>Color</th>
									<th>Genero</th>
									<th>Talla</th>
									<th>Marca</th>
									<th>Cantidad de producto</th>
									<th>Precio unitario</th>
									<th>Costo docena</th>

								</tr>
							</thead>
							<tbody style="background-color:white;">
								<?php 
								if ( $lista ) {
										//echo "falso";
								}else{
									redirect('InventarioController/inicio', 'refresh');
								}

								?>
								<?php foreach($lista as $l):  ?>

									<?php

									 	//$total += $l->TOTAL_DOCENA;

									?>

									<tr>
										<td><?=$l->ID_LISTA ?></td>
										<td><?=$l->ID_PRODUCTO ?></td>
										<td><?=$l->NOMBRE_PRODUCTO ?></td>
										<td><?=$l->TIPO_CATEGORIA ?></td>
										<td><?=$l->NOMBRE_COLOR ?></td>
										<td><?=$l->TIPO_GENERO ?></td>
										<td><?=$l->TALLA ?></td>
										<td><?=$l->NOMBRE_MARCA ?></td>
										<td >
											<input type="hidden" name="id_lista[]" value="<?=$l->ID_LISTA ?>">
											<input type="number" class="form-control" style="width: 50%;" name="cantidad[]" value="<?=$l->CANTIDAD ?>">
										</td>
										<td >

											<input type="number" class="form-control" style="width: 50%;" name="unitario[]" value="<?=$l->UNITARIO ?>">
										</td>
										<td>
											<!--	<a href="<?php echo base_url() . 'InventarioController/updateInventario/' ?>" class="btn btn-primary editar"><i class="bi bi-pencil-square"></i></a>-->
											<a href="<?php echo base_url() . 'InventarioController/eliminarProd/' . $l->ID_LISTA; ?>" class="btn btn-danger">
												<i class="bi bi-trash-fill"></i>
											</a>
										</td>
									</tr>
								<?php endforeach; ?>

								<tr>
									<td colspan="8" ></td>
									<td ><b>Pago total de docena: </b></td>
									<td ><input type="number" step="any" class="form-control" style="width: 50%;" name="total" value="<?= $l->TOTAL_DOCENA;   ?>"></td>
									<td></td>
								</tr>

							</tbody>
						</table>
						<br>
					</div>
				</div>
			</div>
			<div class="container">

				<br>
				<br>

				<input type="submit" name="Actualizar" class="btn btn-success" value="Actualizar lista">
				<input type="submit" name="Siguiente" class="btn btn-primary" value="Siguiente">
				<br>
				<br>
			<!--
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Código de deuda:</label>
					<input type="text" disabled class="form-control" name="cod_deuda" value="<?php echo rand(1000,9999); ?>">
				</div>

				<div class="col-md-6 col-sm-12">
					<label>Fecha de entrada:</label>
					<input type="text" disabled class="form-control" name="fecha" value="15-11-2021">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Proveedor:</label>
					<select name="id_rol" class="form-select" required>
						<option class="option" required>Seleccionar</option>
						<?php foreach ($roles as $r): ?>
							<?php if ($accion == 'insert_usuario'): ?>
								<option required value="<?=$r->ID_ROL;?>"><?=$r->NOMBRE_ROL;?></option>
							<?php else: ?>
								<option required value="<?=$r->ID_ROL?>" <?=$r->ID_ROL == $id_rol ? 'selected' : ""; ?>>
									<?=$r->NOMBRE_ROL; ?>
								</option>
							<?php endif ?>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="col-md-6 col-sm-12">
					<label>Costo de deuda:</label>
					<td ><input type="number" step="any" class="form-control" name="total" value="<?php  echo $total ?>"></td>
				</div>				
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Estado de pago:</label>
					<select name="id_rol" class="form-select" required>
						<option class="option" required>Seleccionar</option>
						<?php foreach ($roles as $r): ?>
							<?php if ($accion == 'insert_usuario'): ?>
								<option required value="<?=$r->ID_ROL;?>"><?=$r->NOMBRE_ROL;?></option>
							<?php else: ?>
								<option required value="<?=$r->ID_ROL?>" <?=$r->ID_ROL == $id_rol ? 'selected' : ""; ?>>
									<?=$r->NOMBRE_ROL; ?>
								</option>
							<?php endif ?>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="col-md-6 col-sm-12">
					<label>Abono:</label>
					<td ><input type="number" step="any" class="form-control" name="total" value="<?= $l->TOTAL_DOCENA ?>"></td>
				</div>				
			</div>
			<br>
			<input type="submit" name="Actualizar" class="btn btn-success" value="Actualizar lista">
		-->
	</div>
</form>
</section>