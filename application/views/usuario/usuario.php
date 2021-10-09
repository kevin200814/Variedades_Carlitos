<div class="container">
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-warning" href="<?=base_url().'UsuarioController/nuevo_usuario';?>">Nuevo usuario</a>
		</div>
		<br/><hr>
		<div class="col-md-12">
			<table class="table table-responsive table-striped table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre de usuario</th>
						<th>Nick de usuario</th>
						<th>Correo</th>
						<th>Fecha de cambios</th>
						<th>Rol</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuario as $u): ?>
						<tr>
							<td><?=$u->ID_USUARIO;?></td>
							<td><?=$u->NOMBRE_USUARIO;?></td>
							<td><?=$u->NICK_USUARIO;?></td>
							<td><?=$u->CORREO_USUARIO;?></td>
							<td><?=$u->FECHA_CAMBIOS;?></td>
							<td><?=$u->NOMBRE_ROL;?></td>
							<td>
								<a href="<?php echo base_url().'UsuarioController/editar_usuario/'.$u->ID_USUARIO; ?>" class="btn btn-primary">Editar</a>
								<a href="<?php echo base_url().'UsuarioController/eliminar_usuario/'.$u->ID_USUARIO; ?>" class="btn btn-danger">Eliminar</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
</div>


