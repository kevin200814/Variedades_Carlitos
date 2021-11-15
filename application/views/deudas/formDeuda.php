<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

	<div class="container" style="position: relative; ">
		<div class="row">
			<div class="col-xs-6" style="margin-left: 0px; padding-right: 20px">
				<h3>Actualizar deuda</h3>
				<br>
				<form class="row g-3" action="" method="post" autocomplete="off">
					
					<div class="col-xs-6 col-md-12">
						<label class="form-label">Nombre del producto</label>
						<input type="text" class="form-control" style="width: 90%;" disabled name="tipo_categoria" value="<?=$movimientos->COD_DEUDA ?>" required>
					</div>

					<div class="col-xs-6 col-md-12">
						<label class="form-label">Fecha de Movimiento</label>
						<input type="date" class="form-control" style="width: 90%;" name="tipo_categoria" value="<?=$movimientos->FECHA_MOVIMIENTO ?>" required>
					</div>
					
					<div class="col-xs-6 col-md-12">
						<label class="form-label">Deuda actual</label>
						<input type="text" class="form-control" style="width: 90%;" disabled name="tipo_categoria" value="<?=$movimientos->DEUDA_PROVEEDOR ?>" required>
					</div>

					<div class="col-xs-6 col-md-12">
						<label class="form-label">Abono a realizar</label>
						<input type="text" class="form-control" style="width: 90%;" name="tipo_categoria" value="<?=$movimientos->ABONO_PROVEEDOR ?>" required>
					</div>

					<div class="col-xs-6 col-md-12">
						<button class="custom-btn btn-7"><span>Guardar</span></button>
						<a id="boton" class="custom-btn btn-5" href="<?=base_url().'DeudasController/index';?>"><span>Cancelar</span></a>
					</div>
				</form>
			</div>		
		</div>
	</div>


</section>