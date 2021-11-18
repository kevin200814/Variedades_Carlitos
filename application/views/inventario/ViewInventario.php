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
					<h3>Ver inventario</h3>

				</div><br>
				<br />
				<hr>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">


					<form method="POST", autocomplete="off" action="<?= base_url('InventarioController/updateInventario')?>">

						<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
							<thead>
								<tr>
									<th>CODIGO</th>
									<th>ENTRADA</th>
									<th>PRODUCTO</th>
									<th>SALIDA</th>
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
										<td><?=$l->ID_ENTRADA ?></td>
										<td><?=$l->ID_PRODUCTO ?></td>
										<td><?=$l->ID_SALIDA ?></td>
										<td><?=$l->FECHA_SALIDA ?></td>
										<td><?=$l->ID_ESTADO_STOCK ?></td>
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
						<br>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			
		</div>
	</form>
</section>