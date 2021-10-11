
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap.min.css">

<link rel="stylesheet" type="<?=base_url().'assets/css/dataTables.bootstrap4.min.css';?>">

<section class="home-section">
	<div class="text">Productos</div>

	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4">
				<a href="<?= base_url("ColoresController/vista") ?>"><div class="well-lg BotonAzulGrande" align="center">Colores <i class="fa fa-tint"></i></div></a>
			</div>
  			<div class="col-xs-12 col-sm-12 col-md-4">
  				<a href="<?=base_url("MarcaController/index") ?>"><div class="well-lg BotonAzulGrande" align="center">Marca <i class="fa fa-check-circle"></i></div></a>
  			</div>
  			<div class="col-xs-12 col-sm-12 col-md-4">
  				<a href="<?=base_url("GeneroController/index") ?>"><div class="well-lg BotonAzulGrande" align="center">Genero <i class="fa fa-female"></i><i class="fa fa-male"></i></div></a>
  			</div>
  		</div>
  	</div>
  </section>