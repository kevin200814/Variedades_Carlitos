<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<section class="home-section">
	<div class="container ">
		<div class="col-md-12 col-sm-12 col-lg-12 ">
			<h3>Registros de productos</h3>
			<br>
			<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
				<a class="btn btn-primary crear" href="<?= base_url() . 'ProductosController/vistaAddProducto'; ?>">
					Nuevo Producto <i class="fa fa-truck" aria-hidden="true"></i>
				</a>
			<?php else : ?>
				<a class="btn btn-primary crear disabled" href="<?= base_url() . 'ProductosController/vistaAddProducto'; ?>">
					Nuevo Producto <i class="fa fa-truck" aria-hidden="true"></i>
				</a>

			<?php endif; ?>
			<hr>
			<br> 
			<div class="scrollmenu">
				<div  style="width: 1000px">
					<table id="example" class="table table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Imagen</th>
								<th>Producto</th>
								<th>Categoria</th>
								<th>Genero</th>
								<th>Color</th>
								<th>Talla</th>
								<th>Marca</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody style="background-color:white;">
							<?php foreach ($producto as $p) : ?>
								<tr> 
									<td><?= $p->ID_PRODUCTO; ?></td>
									<td><img src="<?php echo base_url().'assets/productos/'.$p->IMAGEN; ?>" style="width: 100px;height: 75px;"></td>
									<td><?= $p->NOMBRE_PRODUCTO; ?></td>
									<td><?= $p->TIPO_CATEGORIA; ?></td>
									<td><?= $p->TIPO_GENERO; ?></td>
									<td><?= $p->NOMBRE_COLOR; ?></td>
									<td><?= $p->TALLA; ?></td>
									<td><?= $p->NOMBRE_MARCA; ?></td>
									<td>
										<a href="<?php echo base_url() . 'ProductosController/editar_producto/' . $p->ID_PRODUCTO; ?>" class="btn btn-success editar">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="<?php echo base_url() . 'ProductosController/eliminar_producto/' . $p->ID_PRODUCTO; ?>" class="btn btn-danger eliminar">
											<i class="bi bi-trash-fill"></i>
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
<br>
<br>
<br>
<br>