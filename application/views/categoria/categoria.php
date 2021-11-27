<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>




<section class="home-section">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-lg-12">
			<h3>Registros de Categoria</h3>
			<br>
			<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
				<a class="btn btn-primary crear" role="button" href="<?= base_url() . 'CategoriaController/nuevaCategoria'; ?>">
					Nuevo categoria <i class='bx bxs-color-fill'></i>
				</a>
			<?php else : ?>
				<a class="btn btn-primary crear disabled" disabled="disabled" role="button" href="<?= base_url() . 'CategoriaController/nuevaCategoria'; ?>">
					Nuevo categoria <i class='bx bxs-color-fill'></i>
				</a>
			<?php endif; ?>
			<hr>
			<br>

			<div class="scrollmenu">
				<div  style="width: 700px">
					<table id="example" class="table table-hover table-bordered" >
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Categoria</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody style="background-color:white;">
							<?php foreach ($categoria as $c) : ?>
								<tr>
									<td><?= $c->ID_CATEGORIA; ?></td>
									<td><?= $c->TIPO_CATEGORIA; ?></td>
									<td>
										<a href="<?php echo base_url() . 'CategoriaController/editarCategoria/' . $c->ID_CATEGORIA; ?>" class="btn btn-success editar">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="<?php echo base_url() . 'CategoriaController/eliminarCategoria/' . $c->ID_CATEGORIA; ?>" class="btn btn-danger eliminar">
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
