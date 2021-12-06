<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_marca" value="' . $this->uri->segment(3) . '">';
    $marca = $update->NOMBRE_MARCA;
    
    $titulo = "Actualizar Marca";
    $boton = "Guardar";
    $accion = "update_marca";
} else {
    $id = "";
    $marca = "";
    
    $titulo = "Nueva Marca";
    $boton = "Guardar";
    $accion = "insert_marca";
}
?>

<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

<div class="container">
	<div class="row">
		<div class="col-xs-6 col-md-12" style="margin-left: 0px; padding-right: 20px">
			<h3><?php echo $titulo ?></h3>
			<br>
			<form class="row g-3" action="<?= base_url() . 'MarcaController/' . $accion; ?>" method="post" autocomplete="off">
				<?php echo $id; ?>
			  <div class="col-xs-6 col-md-12">
			    <label class="form-label">Marca:</label>
			    <input type="text" style="width: 90%;" class="form-control" name="marca" value="<?= $marca; ?>" required>
			  </div>

			  <div class="col-xs-6 col-md-12">
			    <button class="btn btn-success"><span><?php echo $boton ?></span></button>
				<a class="btn btn-danger" href="<?=base_url().'MarcaController/index';?>"><span>Cancelar</span></a>
			  </div>
			</form>
		</div>		
	</div>
</div>
</section>
