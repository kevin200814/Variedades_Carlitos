<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_rol" value="' . $this->uri->segment(3) . '">';
    $nombre = $update->NOMBRE_ROL;

    $accion = "update_rol";
} else {
    $id = "";
    $nombre = "";

    $accion = "insert_rol";
}
?>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/form_style.css';?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<div class="container">
	<div class="form-form">
		<div class="form-wrap">
			<div class="col-md-6 col-lg-6 col-sm-12 float-center">
				<form action="<?= base_url() . 'RolController/' . $accion; ?>" method="post">

					<h3 class="card-title">Rol</h3>

					<div class="card-body">
						<?php echo $id; ?>
						<div class="group">
							<label for="nombre_rol" class="label">Nombre del rol:</label>
							<input type="text" name="nombre_rol" class="input" value="<?= $nombre; ?>">
						</div>

					</div>

                    <button type="submit" class="custom-btn btn-7"><span>Agregar Datos</span></button>
					<a id="boton" class="custom-btn btn-5"  href="<?=base_url().'RolController/index';?>"><span>Cancelar</span></a>

				</form>
			</div>
		</div>


	</div>
</div>