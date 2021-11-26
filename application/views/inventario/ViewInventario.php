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
			
			<h3>Stock de productos</h3>
			<br>
			<hr> 		
			<div class="scrollmenu">
				<div style="width: 1900px">
					<form method="POST", autocomplete="off" action="<?= base_url('InventarioController/updateInventario')?>">

						<table id="example" class="table table-hover table-bordered">
							<thead class="thead-dark">
								<tr>
									<th>Código</th>
									<th>Producto</th>
									<th>Categoria</th>
									<th>Color</th>
									<th>Talla</th>
									<th>Genero</th>
									<th>Marca</th>
									<th>Fecha de salida</th>
									<th>Estado de stock</th>
									<th>Entrada de stock</th>
									<th>Cantidad de salida</th>
									<th>Stock final</th>
									<th>Acción</th>
								</tr>
							</thead>
							<tbody style="background-color:white;">
								<?php 
									/*if ( $intermedia ) { // SOLO ES PARA REDIRECCIONAR AL INDEX SI LA TABLA ESTA VACIA
										//echo "falso";
									}else{
										redirect('InventarioController/inicio', 'refresh');
									}

									*/?>
									<?php foreach($intermedia as $l):  ?>

										<tr>
											<td><?=$l->COD_DEUDA ?></td>
											
											<td><?=$l->NOMBRE_PRODUCTO ?></td>
											<td><?=$l->TIPO_CATEGORIA ?></td>
											<td><?=$l->NOMBRE_COLOR ?></td>
											<td><?=$l->TALLA ?></td>
											<td><?=$l->TIPO_GENERO ?></td>
											<td><?=$l->NOMBRE_MARCA ?></td>
											<td><?=$l->FECHA_SALIDA ?></td>
											
											<?php 
											
											
											if ($l->ID_ESTADO_STOCK == 1) {
												echo "<td style='background-color: #1FA51D;color: white;'> $l->ESTADO_STOCK</td>";
											}else if($l->ID_ESTADO_STOCK == 2) {
												echo "<td style='background-color: #F50A0A;color: white;'> $l->ESTADO_STOCK </td>";
											}
											

											?>
											<td><?=$l->STOCK_ACTUAL ?></td>
											<td><?=$l->CANTIDAD_SALIDA ?></td>
											<td><?=$l->STOCK_FINAL ?></td>
											<td>
												<a href="<?php echo base_url() . 'InventarioController/editarEntrada/' . $l->ID_ENTRADA; ?>" class="btn btn-info">
													<i class="bi bi-pencil-square"></i>
												</a>
											</td>
										</tr>
									<?php endforeach; ?>
								</tbody>
							</table>
						</form>
						<br>
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
