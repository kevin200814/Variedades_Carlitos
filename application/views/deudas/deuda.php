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
			<div class="row" style="width: 1400px">
				<div class="col-md-12">
					<h3>Deudas y Abonos</h3>
					<br>
					<br>
				</div><br>
				<br />
				<hr>
				<div class="col-12 col-sm-12 col-md-12 col-lg-12">
					<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
						<thead>
							<tr>
								<th>Codigo deuda</th>
								<th>Fecha</th>
								<th>Deuda</th>
								<th>Abono</th>
								<th>Total a pagar</th>
								<th>Proveedor</th>
								<th>Estado</th>
								<th>Accion</th>
							</tr>
						</thead> 
						<tbody>
							<?php foreach ($movimientos as $m) : ?>

								<tr>
									<td><?= $m->COD_DEUDA; ?></td>
									<td><?= $m->FECHA_MOVIMIENTO; ?></td>
									<td>$ <?= $m->DEUDA_PROVEEDOR; ?></td>
									<td>$ <?= $m->ABONO_PROVEEDOR; ?></td>
									<td>$ <?= $m->TOTAL_A_PAGAR; ?></td>
									<td><?= $m->PROVEEDOR_PRODUCTO; ?></td>
									<?php 
									if ("CANCELADO" == $m->ESTADO_PAGO) {
										echo "<td style='background-color: #1FA51D;color: white;'> $m->ESTADO_PAGO</td>";
									}else if("PENDIENTE" == $m->ESTADO_PAGO) {
										echo "<td style='background-color: #F50A0A;color: white;'> $m->ESTADO_PAGO </td>";
									}
									?>
									<td>
										<a href="<?php echo base_url() . 'DeudasController/detallesMovimiento/' . $m->COD_DEUDA; ?>" class="btn btn-primary detalles">
											<i class="bi bi-pencil-square"></i> Productos relacionados
										</a>
										<a href="<?php echo base_url() . 'DeudasController/editarMovimiento/' . $m->COD_DEUDA; ?>" class="btn btn-success detalles">
										<i class="bi bi-pencil-square"></i> Editar
									</a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


</section>