<style>
    div.scrollmenu {

        overflow: auto;
        white-space: nowrap;
    }

</style>
 <section class="home-section">
 	<div class="container">
 			<div class="col-md-12 col-sm-12 col-lg-12">
 				<h3>Permisos de rol</h3>
 				<br>
 				<ul class="nav nav-tabs card-header-tabs">
 					<li class="nav-item">
 						<a class="nav-link " href="<?php echo base_url(); ?>UsuarioController/index">Usuarios</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link" href="<?php echo base_url(); ?>RolController/index">Roles</a>
 					</li>
 					<li class="nav-item">
 						<a class="nav-link active" href="<?php echo base_url(); ?>PermisosController/index">Permisos de rol</a>
 					</li>
 				</ul>
 				<br>
                <br>
 				<?php if ($this->session->userdata('CREAR') == 'Si') : ?>
 					<a class="btn btn-primary crear" href="<?= base_url() . 'PermisosController/nuevoPermiso'; ?>">
 						Nuevo Permiso <i class='bx bxs-color-fill'></i>
 					</a>
 				<?php else : ?>
 					<a class="btn btn-primary crear disabled" href="<?= base_url() . 'PermisosController/nuevoPermiso'; ?>">
 						Nuevo Permiso <i class='bx bxs-color-fill'></i>
 					</a>
 				<?php endif; ?>
 			<br />
 			<hr>
          <div class="scrollmenu">
                <div  style="width: 990px">
 				<table id="example" class="table table-hover table-bordered">
 					<thead class="thead-dark">
 						<tr>
 							<th>ID</th>
 							<th>Usuario</th>
 							<th>Rol</th>
 							<th>Modulo Asignado</th>
 							<th>Crear</th>
 							<th>Actualizar</th>
 							<th>Eliminar</th>
 							<th>Accion</th>
 						</tr>
 					</thead>
 					<tbody style="background-color:white;">
 						<?php foreach ($menu as $m) : ?>
 							<tr>
 								<td><?= $m->ID_MENU; ?></td>
 								<td><?= $m->NOMBRE_USUARIO; ?></td>
 								<td><?= $m->NOMBRE_ROL; ?></td>
 								<td><?= $m->NOMBRE_MODULO; ?></td>
 								<td><?= $m->CREAR; ?></td>
 								<td><?= $m->ACTUALIZAR; ?></td>
 								<td><?= $m->ELIMINAR; ?></td>
 								<td>
 									<a href="<?php echo base_url() . 'PermisosController/editarPermiso/' . $m->ID_MENU; ?>" class="btn btn-success editar">
 										<i class="bi bi-pencil-square"></i>
 									</a>
 									<a href="<?php echo base_url() . 'PermisosController/deletePermiso/' . $m->ID_MENU; ?>" class="btn btn-danger eliminar">
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