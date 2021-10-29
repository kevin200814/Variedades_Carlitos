 <link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 
<section class="home-section">
      
      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Talla</h3>
				<br>
				<a class="custom-btn btn-14" href="<?=base_url().'TallaController/nueva_talla';?>">Nueva talla <i class='bx bxs-color-fill'></i>
				</a>
				<br>
				<br>
			</div><br>
			<br/><hr>
			<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Talla</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($talla as $c): ?>
							<tr>
								<td><?=$c->ID_TALLA;?></td>
								<td><?=$c->TALLA;?></td>
								<td>
						<a href="<?php echo base_url().'TallaController/editar_talla/'.$c->ID_TALLA; ?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
								</a>
						<a href="<?php echo base_url().'TallaController/eliminar_talla/'.$c->ID_TALLA; ?>" class="btn btn-danger">
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