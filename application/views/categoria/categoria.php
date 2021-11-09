<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 
<section class="home-section">
      
      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Categoria</h3>
				<br>
				<a class="custom-btn btn-14" href="<?=base_url().'CategoriaController/nuevaCategoria';?>">
					Nuevo categoria <i class='bx bxs-color-fill'></i>
				</a>
				<br>
				<br>
			</div><br>
			<br/><hr>
			<div class="col-12 col-sm-12 col-md-12 col-lg-12">
				<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Categoria</th>
							<th>Accion</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($categoria as $c): ?>
							<tr>
								<td><?=$c->ID_CATEGORIA;?></td>
								<td><?=$c->TIPO_CATEGORIA;?></td>
								<td>
									<a href="<?php echo base_url().'CategoriaController/editarCategoria/'.$c->ID_CATEGORIA; ?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
									<a href="<?php echo base_url().'CategoriaController/eliminarCategoria/'.$c->ID_CATEGORIA; ?>" class="btn btn-danger">
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