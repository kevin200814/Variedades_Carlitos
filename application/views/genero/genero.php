<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 
  <section class="home-section">
      <div class="text">Generos</div>


      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="custom-btn btn-14" href="<?=base_url().'GeneroController/nuevo_genero';?>">
						Nuevo Genero <i class="fa fa-female"></i><i class="fa fa-male"></i>
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
						<?php foreach ($genero as $g): ?>
							<tr>
								<td><?=$g->ID_GENERO;?></td>
								<td><?=$g->TIPO_GENERO;?></td>
								<td>
									<a href="<?php echo base_url().'GeneroController/editar_genero/'.$g->ID_GENERO; ?>" class="btn btn-primary">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?php echo base_url().'GeneroController/eliminar_genero/'.$g->ID_GENERO; ?>" class="btn btn-danger">
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