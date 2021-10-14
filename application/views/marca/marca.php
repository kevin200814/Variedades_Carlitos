<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 

 <section class="home-section">
      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Marcas</h3>
				<br>
				<a class="custom-btn btn-14"  href="<?=base_url().'MarcaController/nuevo_marca';?>">
					Nueva marca <i class="fa fa-check-circle"></i>
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
						<?php foreach ($marca as $m): ?>
							<tr>
								<td><?=$m->ID_MARCA;?></td>
								<td><?=$m->NOMBRE_MARCA;?></td>
								<td>
									<a href="<?php echo base_url().'MarcaController/editar_marca/'.$m->ID_MARCA; ?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
									<a href="<?php echo base_url().'MarcaController/eliminar_marca/'.$m->ID_MARCA; ?>" class="btn btn-danger">
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