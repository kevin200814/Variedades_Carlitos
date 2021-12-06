<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<section class="home-section">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-lg-12">
			<h3>Registro de Colores</h3>
			<br>
			<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
				<a class="btn btn-primary crear" href="<?= base_url() . 'ColoresController/nuevo_color'; ?>">
					Nuevo color <i class='bx bxs-color-fill'></i>
				</a>
			<?php else : ?>
				<a class="btn btn-primary crear disabled" href="<?= base_url() . 'ColoresController/nuevo_color'; ?>">
					Nuevo color <i class='bx bxs-color-fill'></i>
				</a>
			<?php endif; ?>
			<hr>
			<div class="scrollmenu">
				<div  style="width: 900px">
					<table id="example" class="table table-hover table-bordered">
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Color</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody style="background-color:white;"> 
							<?php foreach ($colores as $c) : ?>
								<tr>
									<td><?= $c->ID_COLORES; ?></td>
									<td><?= $c->NOMBRE_COLOR; ?></td>
									<td>
										<a href="<?php echo base_url() . 'ColoresController/editar_color/' . $c->ID_COLORES; ?>" class="btn btn-success editar">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="<?php echo base_url() . 'ColoresController/eliminar_color/' . $c->ID_COLORES; ?>" class="btn btn-danger eliminar">
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
	<br>
	<br>
</section>