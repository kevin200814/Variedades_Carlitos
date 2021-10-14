<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title><?=$page_title;?></title>

	<!--- META --->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!--- ICO WEB --->
	<link rel="icon" href="<?=base_url("assets/images/favicon.png")?>" type="image/png" />

	<!--- CSS & CDN--->
	<link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

	<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/bootstrap.css';?>">
	<link rel="stylesheet" href="<?=base_url("assets/logo/style.css") ?>">
	<link rel="stylesheet" href="<?=base_url("assets/css/style_navbar.css")?>">

	<!--- DATATABLE--->

	<link rel="stylesheet" type="<?=base_url().'assets/css/dataTables.bootstrap4.min.css';?>">

	<!--- DATATABLE JS--->
	<script type="text/javascript" src="<?=base_url().'assets/js/jquery-3.5.1.js';?>"></script>
	<script type="text/javascript" src="<?=base_url().'assets/js/jquery.dataTables.min.js';?>"></script>
	<script type="text/javascript" src="<?=base_url().'assets/js/dataTables.bootstrap4.min.js';?>"></script>


	<link rel="stylesheet" type="text/css" href="<?=base_url().'assets/css/button_style.css';?>">

    <link rel="stylesheet" href="<?=base_url("assets/css/style.css") ?>">

</head>

<body style="background-color: #E4E9F7">





	<div class="sidebar ">

		<div class="logo-details">

			<i class="icon-logo3 icon -2x" id="icon"></i>
			<div class="logo_name">Variedades Carlitos</div>
			<i class='bx bx-menu' id="btn"></i>
		</div>

		<ul class="nav-links">
			<li>
				<i class="fas fa-search "></i>
				<input type="text" placeholder="Search...">
				<span class="tooltip">Buscar</span>
			</li>

			<li>
        <a href="<?= base_url("LoginController/inicio")?>">
					<i class="fas fa-home"></i></i>
					<span class="links_name">Index</span>
				</a>
				<span class="tooltip">Pagina Principal</span>
			</li>
			<li>
				<a href="#">
					<i class="fas fa-boxes "></i>
					<span class="links_name">Agregar Inventario</span>
				</a>
				<span class="tooltip">Agregar Inventario</span>
			</li>

			<li>
				<a href="#">
					<i class='bx bx-brightness'></i>
					<span class="links_name">Administrar Inventario</span>
				</a>
				<span class="tooltip" href="#">Administrar Inventario</span>
			</li>

			<li>
				<div class="iocn-link">
					<a href="<?= base_url("ColoresController/index")?>">
						<i class='bx bx-purchase-tag-alt'></i>
						<span class="links_name">Caracteristicas</span>
					</a>
					<span class="tooltip" href="#">Caracteristicas</span>
				</div>
				<ul class="sub-menu blank">
					<li><a class="link_name" href="<?= base_url("ColoresController/vista") ?>">Colores</a></li>
					<li><a class="link_name" href="<?=base_url("GeneroController/index") ?>">Genero</a></li>
					<li><a class="link_name" href="<?=base_url("MarcaController/index") ?>">Marca</a></li>
				</ul>

			</li>


			<li>
				<a href="#">
					<i class='bx bx-bar-chart-alt-2'></i>
					<span class="links_name">Ver Inventario</span>
				</a>

				<span class="tooltip" href="#">Ver Inventario</span>

			</li>


			<li>
				<a href="<?=base_url("UsuarioController/index")?>">
					<i class='bx bx-user'></i>
					<span class="links_name">Usuarios</span>
				</a>

				<span class="tooltip" href="<?=base_url("UsuarioController/index")?>">Usuarios</span>

			</li>

			<li>
        <a href="<?=base_url().'RolController/';?>">
					<i class='bx bx-user-check'></i>
					<span class="links_name">Roles</span>
				</a>

				<span class="tooltip" href="#">Roles</span>

			</li>
			<li>
				<a href="#">
					<i class='bx bx-bar-chart-alt'></i>
					<span class="links_name">Contabilidad</span>
				</a>

				<span class="tooltip" href="#">Contabilidad</span>

			</li>
			<li>
				<a href="#">
					<i class='bx bx-cart'></i>
					<span class="links_name">Abono</span>
				</a>

				<span class="tooltip" href="#">Abono</span>

			</li>

			<li style="position: relative; top: 120px;">
				<a href="<?php echo base_url(); ?>LoginController/logout">

					<i class="fas fa-power-off"></i>
					<span class="links_name">&nbsp; Cerrar sesion</span>

				</a>

				<span class="tooltip">Cerrar Sesion</span>

			</li>
			<div id="page-wrapper">

			</div>
		</ul>
	</div>

	<section class="">
		<div class="text"><br><br></div>

	</section>
	<script>
		let closeBtn = document.querySelector("#btn");
		let searchBtn = document.querySelector(".bx-search");

		closeBtn.addEventListener("click", () => {
			sidebar.classList.toggle("open");
			menuBtnChange();
		});

		searchBtn.addEventListener("click", () => {
			sidebar.classList.toggle("open");
			menuBtnChange();
		});


		function menuBtnChange() {
			if (sidebar.classList.contains("open")) {
				closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");
			} else {
				closeBtn.classList.replace("bx-menu-alt-right", "bx-menu"); //replacing the iocns class
			}
		}
	</script>
	<script src="https://kit.fontawesome.com/cc794b3cc5.js" crossorigin="anonymous"></script>
</body>