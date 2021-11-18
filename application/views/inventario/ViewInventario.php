<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/button_style.css'; ?>">
<section class="home-section">

	<div class="container">
		<div class="scrollmenu">
			<div class="row" style="width: 1900px">
				<div class="col-md-12">
					<h3>Stock de productos</h3>
					<br>
					<ul class="nav nav-tabs card-header-tabs">
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url(); ?>InventarioController/StockInventario">Stock de productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url(); ?>RolController/index">Ventas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="<?php echo base_url(); ?>PermisosController/index"> Registros de nuevo inventario</a>
						</li>
					</ul>
					<br>
				</div><br>
				<br />
				<hr>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">


					<form method="POST", autocomplete="off" action="<?= base_url('InventarioController/updateInventario')?>">

						<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
							<thead>
								<tr>
									<th>CODIGO</th>
									<th>PRODUCTO</th>
									<th>CATEGORIA</th>
									<th>COLOR</th>
									<th>TALLA</th>
									<th>GENERO</th>
									<th>MARCA</th>
									<th>FECHA_SALIDA</th>
									<th>ESTADO STOCK</th>
									<th>STOCK</th>
									<th>ACCION</th>
								</tr>
							</thead>
							<tbody>
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

		<div class="container">

		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
	</section>