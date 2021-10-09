<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-warning" href="<?=base_url().'RolController/nuevo_rol';?>">Nuevo rol
				<i class="bi bi-plus-lg float-end"></i>
			</a>
		</div>
		<br/><hr>
		<div class="col-md-6">
			<table id="tabla" class="table table-responsive table-striped table-bordered table-hover">
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
								<a href="<?php echo base_url().'RolController/editar_rol/'.$r->ID_ROL; ?>" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
								<a href="<?php echo base_url().'RolController/eliminar_rol/'.$r->ID_ROL; ?>" class="btn btn-danger"><i class="bi bi-trash-fill"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>