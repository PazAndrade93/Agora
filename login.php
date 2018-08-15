<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Login - Agora</title>
</head>
<body>
	<div class="container-fluid">
		<div class="linearLayoutV loginForm col-12 col-lg-7">
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