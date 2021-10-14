<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 
<section class="home-section">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Usuarios</h3>
			<br>
			<a class="custom-btn btn-14"  href="<?=base_url().'UsuarioController/nuevo_usuario';?>">
				Nuevo usuario <i class="bi bi-person-plus-fill float-end"></i>
			</a>
		</div><br>
		<br/><hr>
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
				<thead>
					<tr>
						<!--<th>ID</th>-->
						<th>Nick</th>
						<th>Nombre del usuario</th>
						<th>Correo</th>
						<th>Fecha de cambios</th>
						<th>Rol</th>
						<th>Accion</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($usuario as $r): ?>
						<tr>
							<!--<td><?=$r->ID_USUARIO;?></td>-->
							<td><?=$r->NICK_USUARIO;?></td>
							<td><?=$r->NOMBRE_USUARIO;?></td>
							<td><?=$r->CORREO_USUARIO;?></td>
							<td><?=$r->FECHA_CAMBIOS;?></td>
							<td><?=$r->NOMBRE_ROL;?></td>
							<td>
								<a href="<?php echo base_url().'UsuarioController/editar_usuario/'.$r->ID_USUARIO; ?>" class="btn btn-primary">
									<i class="bi bi-pencil-square"></i>
								</a>
								<a href="<?php echo base_url().'UsuarioController/eliminar_usuario/'.$r->ID_USUARIO; ?>" class="btn btn-danger">
									<i class="bi bi-trash-fill"></i>
								</a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div>
	<div class="row">



	</div>
</div>
</section>
