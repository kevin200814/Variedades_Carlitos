<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	<link rel="shortcut icon" href="./assets/images/favicon.png">
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css">

	<style type="text/css">
		label.error {
			color: red;
			font-size: 1rem;
			display: block;
			margin-top: 5px;
		}

		input.error,
		textarea.error {
			border: 1px dashed red;
			font-weight: 300;
			color: red;
		}

		[type="submit"],
		[type="reset"],
		button,
		html [type="button"] {
			margin-left: 0;
			border-radius: 0;
			background: black;
			color: white;
			border: none;
			font-weight: 300;
			padding: 10px 0;
			line-height: 1;
		}
	</style>
</head>
<section class="home-section">

	<body>
		<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
			<div class="container">
				<div class="card login-card">
					<div class="row no-gutters">
						<div class="col-md-5">
							<img src="<?php echo base_url(); ?>assets/images/1.png" alt="login" class="login-card-img">
						</div>
						<div class="col-md-7">
							<div class="card-body">
								<div class="brand-wrapper">
									<h1>Sistema de Inventario</h1>
								</div>
								<p class="login-card-description">Inicio de sesión</p>
								<form method="post" action="<?php echo base_url(); ?>LoginController/userAuth" autocomplete="off">
									<div class="form-group">
										<label for="user" class="sr-only">Usuario</label>
										<input type="text" name="usuario" class="form-control" placeholder="Usuario">
									</div>
									<div class="form-group mb-4">
										<label for="pass" class="sr-only">Password</label>
										<input type="password" name="contrasenia" class="form-control"
											placeholder="***********">
									</div>
									<label style="color:red;"><?php echo $this->session->flashdata('msg');  ?></label>
									<input name="login" id="login" class="btn btn-block login-btn mb-4" type="submit"
										value="Entrar">

								</form>
								<a href="<?=base_url().'RecoveryController/FormaRequestPassword';?>" class="forgot-password">¿Olvidaste tu contraseña?</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>

		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
	</body>

</html>