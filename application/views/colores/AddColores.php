<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_color" value="' . $this->uri->segment(3) . '">';
    $color = $update->NOMBRE_COLOR;
    

    $accion = "update_color";
} else {
    $id = "";
    $color = "";
    
    $accion = "insert_color";
}
?>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/form_style.css';?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

	<div class="container">
		<div class="form-form">
			<div class="form-wrap">
				<div class="col-md-6 col-lg-6 col-sm-12 float-center">
					<form action="<?= base_url() . 'ColoresController/' . $accion; ?>" method="post" autocomplete="off">

						<h3 class="card-title">Colores</h3>

						<div class="card-body">
							<?php echo $id; ?>
							<div class="group">
								<label for="color" class="label">Nombre del color:</label>
								<input type="text" name="color" class="input" value="<?= $color; ?>">
							</div>

						</div>

						<button type="submit" class="custom-btn btn-7"><span>Agregar Datos</span></button>
						<a id="boton" class="custom-btn btn-5"
							href="<?=base_url().'ColoresController/vista';?>"><span>Cancelar</span></a>

				</div>

				</form>
			</div>
		</div>
	</div>


</section>