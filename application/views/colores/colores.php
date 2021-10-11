  <section class="home-section">
      <div class="text">Colores</div>


      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="btn btn-warning" style="background-color: #ffe484; color: black;" href="<?=base_url().'ColoresController/nuevo_color';?>">
					Nuevo color <i class="bi bi-person-plus-fill float-end"></i>
				</a>
			</div>
			<br/><hr>
			<div class="col-md-12">
				<table id="tabla" class="table table-striped table-bordered" style="width:100%; background-color: white;">
					<thead>
						<tr>
							<th>ID</th>
							<th>Color</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($colores as $c): ?>
							<tr>
								<td><?=$c->ID_COLORES;?></td>
								<td><?=$c->NOMBRE_COLOR;?></td>
								<td>
									<a href="<?php echo base_url().'ColoresController/editar_color/'.$c->ID_COLORES; ?>" class="btn btn-primary">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?php echo base_url().'ColoresController/eliminar_color/'.$c->ID_COLORES; ?>" class="btn btn-danger">
										<i class="fa fa-trash"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


  </section>