<link rel="stylesheet" type="text/css" href="<?= base_url() . 'assets/css/button_style.css'; ?>">
<section class="home-section">

	<div class="container">
		<div class="row">
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
							<th>COD_DEUDA</th>
							<th>FECHA_SALIDA deuda</th>
							<th>NOMBRE_PRODUCTO</th>
							<th>TIPO_CATEGORIA</th>
							<th>TALLA</th>
							<th>NOMBRE_COLOR</th>
							<th>TIPO_GENERO</th>
							<th>NOMBRE_MARCA</th>
							<th>STOCK_ACTUAL</th>
							<th>PRECIO_DOCENA</th>
						</tr>
					</thead> 
					<tbody>
						<?php foreach ($deuda as $m) : ?>
							<tr>
								
								<td><?= $deuda->COD_DEUDA; ?></td>
								<td><?= $m->FECHA_SALIDA; ?></td>
								<td><?= $m->NOMBRE_PRODUCTO; ?></td>
								<td><?= $m->TIPO_CATEGORIA; ?></td>
								<td><?= $m->TALLA; ?></td>
								<td><?= $m->NOMBRE_COLOR; ?></td>
								<td><?= $m->TIPO_GENERO; ?></td>
								<td><?= $m->NOMBRE_MARCA; ?></td>
								<td><?= $m->STOCK_ACTUAL; ?></td>
								<td><?= $m->PRECIO_DOCENA; ?></td>
								
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


</section>