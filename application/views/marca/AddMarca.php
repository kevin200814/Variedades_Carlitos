<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_marca" value="' . $this->uri->segment(3) . '">';
    $marca = $update->NOMBRE_MARCA;
    

    $accion = "update_marca";
} else {
    $id = "";
    $marca = "";
    
    $accion = "insert_marca";
}
?>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/form_style.css';?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

	<div class="container">
		<div class="form-form">
			<div class="form-wrap">
				<div class="col-md-6 col-lg-6 col-sm-12 float-center">
					<form action="<?= base_url() . 'MarcaController/' . $accion; ?>" method="post" autocomplete="off">


						<h3 class="card-title">Marca</h3>

						<div class="card-body">
							<?php echo $id; ?>
							<div class="group">
								<label for="marca" class="label">Nombre del marca:</label>
								<input type="text" name="marca" class="input" value="<?= $marca; ?>">
							</div>

						</div>




						<button type="submit" class="custom-btn btn-7"><span>Agregar Datos</span></button>
						<a id="boton" class="custom-btn btn-5"
							href="<?=base_url().'MarcaController/index';?>"><span>Cancelar</span></a>
				</div>

				</form>
			</div>
		</div>
	</div>




</section>