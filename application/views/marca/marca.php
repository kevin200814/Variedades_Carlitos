<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 

 <section class="home-section">
      <div class="text">Marcas</div>


      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<a class="custom-btn btn-14"  href="<?=base_url().'MarcaController/nuevo_marca';?>">
					Nueva marca <i class="fa fa-check-circle"></i>
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
						<?php foreach ($marca as $m): ?>
							<tr>
								<td><?=$m->ID_MARCA;?></td>
								<td><?=$m->NOMBRE_MARCA;?></td>
								<td>
									<a href="<?php echo base_url().'MarcaController/editar_marca/'.$m->ID_MARCA; ?>" class="btn btn-primary">
										<i class="fa fa-pencil"></i>
									</a>
									<a href="<?php echo base_url().'MarcaController/eliminar_marca/'.$m->ID_MARCA; ?>" class="btn btn-danger">
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