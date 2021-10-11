<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_usuario" value="' . $this->uri->segment(3) . '">';
    $nombre = $update->NOMBRE_USUARIO;
    $nick = $update->NICK_USUARIO;
    $correo = $update->CORREO_USUARIO;
    $contrasenia = $update->CONTRASENIA_USUARIO;
    $fecha_cambios = $update->FECHA_CAMBIOS;
    $id_rol = $update->ID_ROL;

    $accion = "update_usuario";
} else {
    $id = "";
    $nombre = "";
    $nick = "";
    $correo = "";
    $contrasenia = "";
    $fecha_cambios = "";
    $id_rol = "";

    $accion = "insert_usuario";
}
?>
<script>
	function getDate() {
		var today = new Date();
		var dd = today.getDate();
		var mm = today.getMonth() + 1; //January is 0!
		var yyyy = today.getFullYear();

		if (dd < 10) {
			dd = '0' + dd
		}

		if (mm < 10) {
			mm = '0' + mm
		}

		today = yyyy + '/' + mm + '/' + dd;
		console.log(today);
		document.getElementById("date").value = today;
	}


	window.onload = function () {
		getDate();
	};
</script>
<script>
	$('#element').toast('show')
</script>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/form_style.css';?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<div class="container">

	<div class="form-wrap">

		<div class="form-form">
			<div class="col-md-6 col-lg-6 col-sm-12 float-center">
				<form action="<?= base_url() . 'UsuarioController/' . $accion; ?>" method="post">

					<h3 class="card-title">Usuario</h3>

					<div class="card-body">
						<?php echo $id; ?>
						<div class="group">
							<label for="nombre" class="label">Nombre del usuario:</label>
							<input type="text" name="nombre" class="input" value="<?= $nombre; ?>" required>
						</div>

						<div class="group">
							<label for="nick" class="label">Nick del usuario:</label>
							<input type="text" name="nick" class="input" value="<?= $nick; ?>" required>
						</div>

						<div class="group">
							<label for="correo" class="label">Correo:</label>
							<input type="text" name="correo" class="input" value="<?= $correo; ?>" required>
						</div>

						<div class="group">
							<label for="contrasenia" class="label">Contraseña:</label>
							<input type="text" name="contrasenia" class="input" value="<?= $contrasenia; ?>" required>
						</div>

						<div class="group">
							<label for="fecha_cambios" class="label">Fecha de cambios:</label>
							<input type="date" id="date" name="fecha_cambios" class="input"
								value="<?= $fecha_cambios; ?>" style=" color:white;"
								min="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."- 1 days"));?>"
								max="<?php echo date("Y-m-d",strtotime(date("Y-m-d")."- 1 days"));?>" required>
						</div>



						<div class="group">
							<label for="id_rol" class="label">Rol:</label>
							<select name="id_rol" class="input-rol">
								<option class="option" required>Seleccionar</option>
								<?php foreach ($roles as $r): ?>
								<?php if ($accion == 'insert_usuario'): ?>
								<option required value="<?=$r->ID_ROL;?>"><?=$r->NOMBRE_ROL;?></option>
								<?php else: ?>
								<option required value="<?=$r->ID_ROL?>" <?=$r->ID_ROL == $id_rol ? 'selected' : ""; ?>>
									<?=$r->NOMBRE_ROL; ?>
								</option>
								<?php endif ?>
								<?php endforeach; ?>
							</select>
						</div>

					</div>

					<button class="custom-btn btn-7"><span>Agregar Datos</span></button>
					<a id="boton" class="custom-btn btn-5" href="<?=base_url().'UsuarioController/index';?>"><span>Cancelar</span></a>



				</form>
			</div>
		</div>
	</div>
</div>