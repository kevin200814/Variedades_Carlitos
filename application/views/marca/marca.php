<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<section class="home-section">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-lg-12">
			<h3>Registro de marcas</h3>
			<br>
			<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
				<a class="btn btn-primary crear" href="<?= base_url() . 'MarcaController/nuevo_marca'; ?>">
					Nueva marca <i class="fa fa-check-circle"></i>
				</a>
			<?php else : ?>
				<a class="btn btn-primary crear disabled" href="<?= base_url() . 'MarcaController/nuevo_marca'; ?>">
					Nueva marca <i class="fa fa-check-circle"></i>
				</a>
			<?php endif; ?>
			<hr>
			<div class="scrollmenu">
				<div  style="width: 900px">
					<table id="example" class="table table-hover table-bordered" >
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Marca</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody style="background-color:white;">
							<?php foreach ($marca as $m) : ?>
								<tr>
									<td><?= $m->ID_MARCA; ?></td>
									<td><?= $m->NOMBRE_MARCA; ?></td>
									<td>
										<a href="<?php echo base_url() . 'MarcaController/editar_marca/' . $m->ID_MARCA; ?>" class="btn btn-success editar">
											<i class="bi bi-pencil-square"></i>
										</a>
										<a href="<?php echo base_url() . 'MarcaController/eliminar_marca/' . $m->ID_MARCA; ?>" class="btn btn-danger eliminar">
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