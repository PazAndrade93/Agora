<?php require_once("header.php");?>
<div class="linearLayoutV loginForm col-12 col-lg-5">
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
	  	<button type="submit" class="btn btn-outline-primary col-sm-6 offset-sm-3">Iniciar sesión</button><br>
	  	<div class="col-sm-6 offset-sm-3 underButtonLink">
	  		<a href="registro.php">¿Todavía no tenes una cuenta? Registrate gratis acá</a>
	  	</div>
	</form>
</div>
<div class="loginImg col-lg-7">
	<img src="img/loginMinimalistPic.png">
</div>
<?php require_once("footer.php");?>

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