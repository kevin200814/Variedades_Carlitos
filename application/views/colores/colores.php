<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 

 
 <section class="home-section">
      <div class="text">Colores</div>


      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="custom-btn btn-14" href="<?=base_url().'ColoresController/nuevo_color';?>">
					Nuevo color <i class="fas fa-tint" style="color: rgb(148, 37, 228);"></i>
				</a>
			</div><br>
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