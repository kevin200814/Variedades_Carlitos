<style type="text/css">
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/button_style.css'; ?>">
<section class="home-section">

	
	<div class="container">
		
		  <div class="row">
		    <ul class="nav nav-tabs card-header-tabs">
		      <li class="nav-item">
		        <a class="nav-link" href="<?php echo base_url(); ?>VentaController/index">Productos</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link active" href="<?php echo base_url(); ?>VentaController/index">Venta</a>
		      </li>
		    </ul>
		    
		  </div>
		  <br><br><br>

		<div class="scrollmenu">
			<div class="row" style="width: 1900px">
				<div class="col-md-12">
					<h3>Lista de productos en venta</h3>

				</div><br>
				<br />
				<hr>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">


					<form method="POST", autocomplete="off" action="<?= base_url('InventarioController/updateInventario')?>">

						<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
							<thead>
								<tr>
									<th>ID_LISTA</th>
									<th>ID_PRODUCTO</th>
									<th>NOMBRE_PRODUCTO</th>
									<th>TIPO_CATEGORIA</th>
									<th>NOMBRE_COLOR</th>
									<th>TIPO_GENERO</th>
									<th>TALLA</th>
									<th>NOMBRE_MARCA</th>
									<th>Cantidad</th>
									<th>Precio unitario</th>
									<th>Costo docena</th>
									
								</tr>
							</thead>
							<tbody>
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
											<input type="number" class="form-control" style="width: 50%;" name="cantidad[]" value="<?=$l->CANTIDAD_VENDIDA ?>">
										</td>
										<td >
											
											<!--<input type="number" class="form-control" style="width: 50%;" name="unitario[]" value="<?=$l->UNITARIO ?>">-->
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
									<td ><b>Total</b></td>
									<!--<td ><input type="number" step="any" class="form-control" style="width: 50%;" name="total" value="<?= $l->TOTAL_DOCENA;   ?>"></td>-->
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
			<input type="submit" name="Siguiente" class="btn btn-success" value="Siguiente">
			<br>
			<br>