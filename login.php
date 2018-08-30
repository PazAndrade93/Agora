<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon"/>
	<title>Login - Agora</title>
</head>
<body>
	<div class="container-fluid contenedorPantallaCompleta">
		<div class="linearLayoutV loginForm col-12 col-lg-7">
			<div style="position: fixed; top: 0;">
				<a class="navbar-brand" href="index.php">
	              <img src= "img/agora.png"  class="logo" alt="Brand">
	            </a>
			</div>
			<form method="POST">
				<h2 class="titulo">Login</h2><br>
			  <div class="row">
			  	<div class="col-12">
			  		<label for="inputEmail1">Email</label>
			    	<input type="email" class="form-control" id="inputEmail1"placeholder="Email" name="email">
			  	</div> 
			  </div>
			  <div class="row">
			  	<div class="col-12">
			  		<label for="inputPassword">Contraseña</label>
			    	<input type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" placeholder="Contraseña" name="password">
			    	<a href="#"><small id="passwordHelp" class="form-text">¿Olvidaste tu contraseña?</small></a>
			  	</div>
			  </div>
			  <div class="row form-check">
			  	<div class="col-12">
			  		<input type="checkbox" class="form-check-input" id="checkMantenerSesion" name="mantener">
			    	<label class="form-check-label" for="checkMantenerSesion">Mantener iniciada la sesión</label>
			  	</div><br>
			  </div>
			  <button type="submit" class="btn btn-outline-primary">Iniciar sesión</button><br>
			  <a href="registro.php">¿Todavía no tenes una cuenta? Registrate gratis acá</a>
			</form>
		</div>
		<div class="loginImg col-lg-5">
			<img src="img/loginMinimalistPic.png">
		</div>
	</div>	
</body>
</html>

<?php /*
<?php
	require_once('funciones.php');
	// Variables para persistencia
	$email = '';
	// Array de errores vacío
	$errores = [];
	// Si envían algo por $_POST
	if ($_POST) {
		$email = trim($_POST['email']);
		$errores = validarLogin($data);
		if (empty($errores)) {
			//logueo al usuario
		if (isset($_POST['recordar'])) {
			//recordar al usuario
		}
		header('location:exito.php?estado=login');
		}
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
   <body>
		<?php if (!empty($errores)): ?>
			<div class="div-errores alert alert-danger">
				<ul>
					<?php foreach ($errores as $value): ?>
					<li><?=$value?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<div class="data-form">
			<form  method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="name">Email:</label>
							<input class="form-control" type="text" name="email" value="<?=$email?>">
							<?php if (isset($errores['email'])): ?>
								<span style="color: red;">
									<b class="glyphicon glyphicon-exclamation-sign"></b>
									<?=$errores['email'];?>
								</span>
							<?php endif; ?>
		            </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="name">Contraseña:</label>
							<input class="form-control" type="text" name="pass" value="">
							<?php if (isset($errores['pass'])): ?>
								<span style="color: red;">
									<b class="glyphicon glyphicon-exclamation-sign"></b>
									<?=$errores['pass'];?>
								</span>
							<?php endif; ?>
		            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<input type="checkbox" name="recordar">
							Recordar
						</div>
					</div>
				</div>

            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
	  	</div>
   </body>
</html>
*/ ?>