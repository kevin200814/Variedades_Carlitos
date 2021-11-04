<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 

 <section class="home-section">
      <div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>Productos</h3>
				<br>
				<a class="custom-btn btn-14"  href="<?=base_url().'ProductosController/vistaAddProducto';?>">
					Nuevo Producto <i class="fa fa-truck" aria-hidden="true"></i>
				</a>
			</div><br>
			<br/><hr>
			<div class="col-md-12">
				<table id="example" class="table table-striped table-bordered nowrap" style="width: 100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Imagen</th>
							<th>Producto</th>
							<th>Categoria</th>
							<th>Genero</th>
							<th>Color</th>
							<th>Talla</th>
							<th>Marca</th>
							<th>Editar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($producto as $p): ?>
							<tr>
								<td><?=$p->ID_PRODUCTO;?></td>
								<td><img src="<?=base_url()?>./assets/images/Upload/<?php echo $p->IMAGEN ;?>" style="width: 100px;height: 75px;"></td>
								<td><?=$p->NOMBRE_PRODUCTO;?></td>
								<td><?=$p->TIPO_CATEGORIA;?></td>
								<td><?=$p->TIPO_GENERO;?></td>
								<td><?=$p->NOMBRE_COLOR;?></td>
								<td><?=$p->TALLA;?></td>
								<td><?=$p->NOMBRE_MARCA;?></td>
								<td>
									<a href="<?php echo base_url().'ProductosController/editar_producto/'.$p->ID_PRODUCTO; ?>" class="btn btn-primary">
										<i class="bi bi-pencil-square"></i>
									</a>
									<a href="<?php echo base_url().'ProductosController/eliminar_producto/'.$p->ID_PRODUCTO; ?>" class="btn btn-danger">
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