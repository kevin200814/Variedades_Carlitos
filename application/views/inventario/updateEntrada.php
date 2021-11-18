<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
<section class="home-section">

	<div class="container" style="position: relative; ">
		<div class="row">
			<div class="col-xs-6" style="margin-left: 0px; padding-right: 20px">
				<h3>Actualizar Producto</h3>
				<br>
				<form class="row g-3" action="<?php echo base_url(); ?>InventarioController/" method="post" autocomplete="off">

					<div class="col-xs-6 col-md-6 ">
						<label class="form-label">Nombre del producto</label>
						<input type="hidden" name="id_entrada"  value="<?=$Entrada->ID_ENTRADA ?>">
						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->NOMBRE_PRODUCTO; ?>" required>

					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Categoria del producto</label>

						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->TIPO_CATEGORIA; ?>" required>
					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Color del producto</label>

						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->NOMBRE_COLOR; ?>" required>
					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Talla del producto</label>

						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->TALLA; ?>" required>
					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Genero del producto</label>

						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->TIPO_GENERO; ?>" required>
					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Marca del producto</label>

						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->NOMBRE_MARCA; ?>" required>
					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Fecha salida del producto</label>
						<input type="date" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->FECHA_SALIDA; ?>" required>
					</div>
					<div class="col-xs-6 col-md-6">
						<label class="form-label">Stock final</label>
						<input type="text" class="form-control" readonly style="width: 90%;" name="nombre_producto" value="<?= $Entrada->STOCK_FINAL; ?>" required>
					</div>

					<div class="col-xs-6 col-md-12">
						<button class="custom-btn btn-7"><span>Guardar</span></button>
						<a id="boton" class="custom-btn btn-5" href="<?=base_url().'InventarioController/StockInventario';?>"><span>Cancelar</span></a>
					</div>
				</form>
			</div>		
		</div>
	</div>


</section>

