<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-warning" href="<?=base_url().'RolController/nuevo_rol';?>">Nuevo rol</a>
		</div>
		<br/><hr>
		<div class="col-md-6">
			<table class="table table-responsive table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre del rol</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($roles as $r): ?>
						<tr>
							<td><?=$r->ID_ROL;?></td>
							<td><?=$r->NOMBRE_ROL;?></td>
							<td>
								<a href="<?php echo base_url().'RolController/editar_rol/'.$r->ID_ROL; ?>" class="btn btn-primary">Editar</a>
								<a href="<?php echo base_url().'RolController/eliminar_rol/'.$r->ID_ROL; ?>" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>