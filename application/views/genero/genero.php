<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<section class="home-section">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-lg-12">
			<h3>Registro de generos</h3>
			<br>
			<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
				<a class="crear btn btn-primary" href="<?= base_url() . 'GeneroController/nuevo_genero'; ?>">
					Nuevo Genero <i class="fa fa-female"></i><i class="fa fa-male"></i>
				</a>
			<?php else : ?>
				<a class="btn btn-primary crear disabled" href="<?= base_url() . 'GeneroController/nuevo_genero'; ?>">
					Nuevo Genero <i class="fa fa-female"></i><i class="fa fa-male"></i>
				</a>
			<?php endif; ?>
			<br />
			<hr>
			<div class="scrollmenu">
				<div  style="width: 900px">
					<table id="example" class="table table-hover table-bordered" >
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Color</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody style="background-color:white;">
							<?php foreach ($genero as $g) : ?>
								<tr>
									<td><?= $g->ID_GENERO; ?></td>
									<td><?= $g->TIPO_GENERO; ?></td>
									<td>
										<a href="<?php echo base_url() . 'GeneroController/editar_genero/' . $g->ID_GENERO; ?>" class="btn btn-success editar">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="<?php echo base_url() . 'GeneroController/eliminar_genero/' . $g->ID_GENERO; ?>" class="btn btn-danger eliminar">
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