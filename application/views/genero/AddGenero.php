<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_genero" value="' . $this->uri->segment(3) . '">';
    $genero = $update->TIPO_GENERO;
    

    $accion = "update_genero";
} else {
    $id = "";
    $genero = "";
    
    $accion = "insert_genero";
}
?>
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/form_style.css';?>">
<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

	<div class="container">
    <div class="form-form">
			<div class="form-wrap">
			<div class="col-md-6 col-lg-6 col-sm-12 float-center">
				<form action="<?= base_url() . 'GeneroController/' . $accion; ?>" method="post" autocomplete="off">
	
							<h3 class="card-title">Genero</h3>
		
						<div class="card-body">
							<?php echo $id; ?>
							<div class="group">
								<label for="genero" class="label">Tipo de genero:</label>
								<input type="text" name="genero" class="input" value="<?= $genero; ?>">
							</div>

						</div>
						<button type="submit" class="custom-btn btn-7"><span>Agregar Datos</span></button>
						<a id="boton" class="custom-btn btn-5"
							href="<?=base_url().'GeneroController/index';?>"><span>Cancelar</span></a>
					</div>

				</form>
			</div>
		</div>
        </div>
    </div>


</section>