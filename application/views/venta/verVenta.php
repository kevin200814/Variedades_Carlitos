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
					<h3>Registro de ventas</h3>
					<br>
					<ul class="nav nav-tabs card-header-tabs">
						<li class="nav-item">
							<a class="nav-link " href="<?php echo base_url(); ?>InventarioController/StockInventario">Stock de productos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active" href="<?php echo base_url(); ?>VentaController/verVentana">Ventas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="<?php echo base_url(); ?>VentaController/index"> Registros de nuevo inventario</a>
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
								<?php foreach($inventario as $i): ?>
								<tr>
									<td><?=$i->COD_DEUDA ?></td>
								</tr>
							<?php endforeach; ?>	
						</tbody>
					</table>
				</form>
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