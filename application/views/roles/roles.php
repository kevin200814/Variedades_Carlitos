
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>"> 
<section class="home-section">
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Roles</h3>
			<br>
			<a class="custom-btn btn-14" href="<?=base_url().'RolController/nuevo_rol';?>">
					Nuevo Rol <i class="bi bi-plus-lg float-end"></i>
			</a>
		</div><br>
		<br/><hr>
		<div class="col-md-12">
			<table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
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