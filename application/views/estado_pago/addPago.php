<?php
if (isset($update)) {
    $id = '<input type="hidden" name="id_estado_pago" value="' . $this->uri->segment(3) . '">';
    $pago = $update->ESTADO_PAGO;
    
    $titulo = "Actualizar estado de pago";
    $boton = "Guardar";
    $accion = "updatePago";
} else {
    $id = "";
    $pago = "";
    
    $titulo = "Nuevo estado de pago";
    $boton = "Guardar";
    $accion = "insertPago";
}
?>

<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

<div class="container" style="position: relative; ">
	<div class="row">
		<div class="col-xs-6" style="margin-left: 0px; padding-right: 20px">
			<h3><?php echo $titulo ?></h3>
			<br>
			<form class="row g-3" action="<?= base_url() . 'PagoController/' . $accion; ?>" method="post" autocomplete="off">
				<?php echo $id; ?>
			  <div class="col-xs-6 col-md-12">
			    <label class="form-label">Estado de pago:</label>
			    <input type="text" class="form-control" style="width: 90%;" name="pago" value="<?= $pago; ?>" required>
			  </div>

			  <div class="col-xs-6 col-md-12">
			    <button class="btn btn-success"><span><?php echo $boton ?></span></button>
				<a class="btn btn-danger" href="<?=base_url().'PagoController/index';?>"><span>Cancelar</span></a>
			  </div>
			</form>
		</div>		
	</div>
</div>


</section>


