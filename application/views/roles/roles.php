<style>
	div.scrollmenu {

		overflow: auto;
		white-space: nowrap;
	}

</style>
<section class="home-section">
	<div class="container">

		<div class="col-md-12">
			<h3>Registro de roles</h3>
			<br>
			<ul class="nav nav-tabs card-header-tabs">
				<li class="nav-item">
					<a class="nav-link " href="<?php echo base_url(); ?>UsuarioController/index">Usuarios</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" href="<?php echo base_url(); ?>RolController/index">Roles</a>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="<?php echo base_url(); ?>PermisosController/index">Permisos de rol</a>
				</li>
			</ul>
			<br>
			<br>
			<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
				<a class="btn btn-primary crear" href="<?= base_url() . 'RolController/nuevo_rol'; ?>">
					Nuevo Rol <i class="bi bi-plus-lg float-end"></i>
				</a>
			<?php else : ?>
				<a class="btn btn-primary crear disabled" href="<?= base_url() . 'RolController/nuevo_rol'; ?>">
					Nuevo Rol <i class="bi bi-plus-lg float-end"></i>
				</a>
			<?php endif; ?>
			
			<hr>
			<div class="scrollmenu">
				<div  style="width: 900px">
					<table id="example" class="table table-hover table-bordered" >
						<thead class="thead-dark">
							<tr>
								<th>ID</th>
								<th>Rol</th>
								<th>Crear registro</th>
								<th>Actualizar registro</th>
								<th>Eliminar registro</th>
								<th>Accion</th>
							</tr>
						</thead>
						<tbody style="background-color:white;">
							<?php foreach ($roles as $r) : ?>
								<tr>
									<td><?= $r->ID_ROL; ?></td>
									<td><?= $r->NOMBRE_ROL; ?></td>
									<td><?= $r->CREAR; ?></td>
									<td><?= $r->ACTUALIZAR; ?></td>
									<td><?= $r->ELIMINAR; ?></td>
									<td>
										<a href="<?php echo base_url() . 'RolController/editar_rol/' . $r->ID_ROL; ?>" class="btn btn-success editar"><i class="bi bi-pencil-square"></i></a>
										<a href="<?php echo base_url() . 'RolController/eliminar_rol/' . $r->ID_ROL; ?>" class="btn btn-danger eliminar"><i class="bi bi-trash-fill"></i></a>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
</section>
<br>
<br>
<br>
<br>