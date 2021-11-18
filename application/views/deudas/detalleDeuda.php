<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/button_style.css'; ?>">
<section class="home-section">

	<div class="container">
		<div class="scrollmenu" >
			<div class="row" style="width: 1600px">
				<div class="col-md-12">
					<h3>Deudas y Abonos</h3>
					<br>
					<br>
					<a href="<?php echo base_url(); ?>DeudasController/index" class="btn btn-info">Volver a deudas y abonos</a>
					<br>
					<br>
				</div><br>
				<br />
				<hr> 
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
						<thead>
							<tr>
								<th>COD_DEUDA</th>
								<th>NOMBRE PROVEEDOR</th>
								<th>NOMBRE PRODUCTO</th>
								<th>DEUDA PROVEEDOR</th>
								<th>ABONO PROVEEDOR</th>
								<th>TOTAL A PAGAR</th>
								<th>TALLA</th>
								<th>COLOR</th>
								<th>GENERO</th>
								<th>MARCA</th>
								<th>FECHA</th>
								
							</tr>
						</thead> 
						<tbody>
							<?php foreach ($deuda as $m) : ?>
								<tr>

									<td><?= $m->COD_DEUDA; ?></td>
									<td><?= $m->PROVEEDOR_PRODUCTO; ?></td>
									<td><?= $m->NOMBRE_PRODUCTO; ?></td>
									<td><?= $m->DEUDA_PROVEEDOR; ?></td>
									<td><?= $m->ABONO_PROVEEDOR; ?></td>
									<td><?= $m->TOTAL_A_PAGAR; ?></td>
									<td><?= $m->TALLA; ?></td>
									<td><?= $m->NOMBRE_COLOR; ?></td>
									<td><?= $m->TIPO_GENERO; ?></td>
									<td><?= $m->NOMBRE_MARCA; ?></td>
									<td><?= $m->FECHA_MOVIMIENTO; ?></td>
									
							<!--	<td>
									<a href="<?php echo base_url() . 'DeudasController/editarMovimiento/' . $m->ID_MOVIMIENTO; ?>" class="btn btn-success detalles">
										<i class="bi bi-pencil-square"></i> Editar
									</a>
								</td>-->
								
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


</section>