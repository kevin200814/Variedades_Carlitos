<section class="home-section">
	<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">
	<div class="container">


		<?php

		date_default_timezone_set('UTC');
		$hoy = date('Y-m-d');

		?>




		<form action="<?= base_url('InventarioController/MultipleInsert') ?>" method="POST" autocomplete="off">
			<?php foreach($lista as $l):  ?>

		 <?php

		 	//$total += $l->TOTAL_DOCENA;
		 	
		 ?>
		 <!--<h3>Validar el for</h3>-->
		 <input type="hidden" class="form-control"  min="0" name="ID_LISTA[]" value="<?= $l->ID_LISTA?>" >

		 <!--<h3>Entrada</h3>-->
		 <input type="hidden" class="form-control"  min="0" name="FECHA_ENTRADA[]" value="<?php print_r($hoy); ?>" >
		 <input type="hidden" class="form-control"  min="0" name="PRECIO_UNIDAD[]" value="<?= $l->UNITARIO?>" >
		 <!--<input type="hidden" class="form-control"  min="0" name="PRECIO_DOCENA[]" value="<?= $l->TOTAL_DOCENA?>" > DEBERIA IR EL CAMPO DE ABAJO DE --> 
		 <input type="hidden" class="form-control"  min="0" name="STOCK_ACTUAL[]" value="<?= $l->CANTIDAD?>" >

		 <!--<h3>Salida</h3>-->
		 <input type="hidden" class="form-control"  min="0" name="FECHA_SALIDA[]" value="<?php print_r($hoy); ?>" >
		 <input type="hidden" class="form-control"  min="0" name="VENTA_FINAL[]" value="0" >
		 <input type="hidden" class="form-control"  min="0" name="CANTIDAD_SALIDA[]" value="0" >
		 <input type="hidden" class="form-control"  min="0" name="TOTAL_A_CANCELAR[]" value="0" >

		 <!--<h3>Intermedia</h3>-->
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO[]" value="Codigo de Deuda (ABAJO)" > SE MANDE EL DE ABAJO-->
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO[]" value="Ultimo ID de Entrada" > LO RECUPERA EN EL CONTROLADOR-->
		 <input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO_I[]" value="<?= $l->ID_PRODUCTO?>" >
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO[]" value="Ultimo ID de Salida" > SE RECUPERA EN EL CONTROLADOR-->
		 <input type="hidden" class="form-control"  min="0" name="FECHA_SALIDA_I[]" value="<?php print_r($hoy); ?>" >
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_ESTADO_STOCK[]" value="Estado de stock (Abajo)" > Poca Existencia, Disponible, Agotado  POR DEFECTO 2 (Disponible)-->
		 <input type="hidden" class="form-control"  min="0" name="STOCK_FINAL[]" value="<?= $l->CANTIDAD?>" >

		 <!--<h3>VEN Movimiento</h3>-->
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO[]" value="Codigo de Deuda (ABAJO)" > SE MANDE EL DE ABAJO-->
		 <input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO_M[]" value="<?= $l->ID_PRODUCTO?>" >
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_PROVEEDOR_M[]" value="Id Proveedor (Abajo)" >-->
		 <input type="hidden" class="form-control"  min="0" name="FECHA_MOVIMIENTO[]" value="<?php print_r($hoy); ?>" >
		 <input type="hidden" class="form-control"  min="0" name="DEUDA_PROVEEDOR[]" value="<?= $l->TOTAL_DOCENA?>" >
		 <!--<input type="hidden" class="form-control"  min="0" name="ABONO[]" value="Abono (Abajo)" >-->
		 <input type="hidden" class="form-control"  min="0" name="TOTAL_A_PAGAR[]" value="<?= $l->TOTAL_DOCENA?>" >
		 <!--<input type="hidden" class="form-control"  min="0" name="ID_PRODUCTO[]" value="<?= $l->TOTAL_DOCENA?>" > Pendiente, Cancelado-->
		 

		<?php endforeach; ?>

			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Código de deuda:</label>
					<input type="text" readonly class="form-control" name="codigoD" value="<?php echo rand(1000,9999); ?>">
				</div>

				<div class="col-md-6 col-sm-12">
					<label>Fecha de entrada:</label>
					<input type="text" readonly class="form-control" name="fecha" value="<?php print_r($hoy); ?>">
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Proveedor:</label>
					<select name="id_proveedor" class="form-select" required>
						<option class="option" required>Seleccionar</option>
						<?php foreach ($proveedor as $p): ?>
								<option required value="<?=$p->ID_PROVEEDOR;?>"><?=$p->PROVEEDOR_PRODUCTO;?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="col-md-6 col-sm-12">
					<label>Costo de deuda:</label>
					<td ><input type="number" step="any" readonly class="form-control" name="TOTAL_D" value="<?= $l->TOTAL_DOCENA?>" ></td>
				</div>				
			</div>
			<br> 
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Estado de pago:</label>
					<select name="id_pago" class="form-select" required>
						<option class="option" required>Seleccionar</option>
						<?php foreach ($pago as $r): ?>
								<option required value="<?=$r->ID_ESTADO_PAGO;?>"><?=$r->ESTADO_PAGO;?></option>
						<?php endforeach; ?>
					</select>
				</div>

				<div class="col-md-6 col-sm-12">
					<label>Abono:</label>
					<td ><input type="number" step="any" class="form-control" name="abono" ></td>
				</div>				
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<label>Estado de stock:</label>
					<select name="id_stock" class="form-select" required>
						<option class="option" required>Seleccionar</option>
						<?php foreach ($stock as $s): ?>
								<option required value="<?=$s->ID_ESTADO_STOCK;?>"><?=$s->ESTADO_STOCK;?></option>
						<?php endforeach; ?>
					</select>
				</div>	
			</div>
			<br>
			<div class="row">
				<div class="col-md-6 col-sm-12">
					<input type="submit" name="guardar" value="Guardar" class="btn btn-success">
					<a name="regregar" value="Cancelar" class="btn btn-danger" href="<?= base_url('InventarioController/index')?>">Cancelar</a>
				</div>				
			</div>
			<br><br>
		</form>

	</div>

</section>