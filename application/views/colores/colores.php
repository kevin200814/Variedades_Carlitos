<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 
<section class="home-section">
      
      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Colores</h3>
				<br>
				<a class="custom-btn btn-14" href="<?=base_url().'ColoresController/nuevo_color';?>">
					Nuevo color <i class='bx bxs-color-fill'></i>
				</a>
			</div><br>
			<br/><hr>
			<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
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
										<i class="bi bi-pencil-square"></i>
									</a>
									<a href="<?php echo base_url().'ColoresController/eliminar_color/'.$c->ID_COLORES; ?>" class="btn btn-danger">
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


  </section>