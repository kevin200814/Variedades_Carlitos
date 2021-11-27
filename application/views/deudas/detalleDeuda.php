<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>

<section class="home-section">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-lg-12">
			<h3>Detalle de deuda</h3>
			<br>
			<a href="<?php echo base_url(); ?>DeudasController/index" class="btn btn-info">Volver a deudas y abonos</a>
			<br>
			<hr>
			<div class="scrollmenu" >
				<div  style="width: 1600px"> 
					<table id="example" class="table table-hover table-bordered" style="width: 100%">
						<thead class="thead-dark">
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
						<tbody style="background-color:white;">
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