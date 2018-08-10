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
	<div class="container">
		<form method="POST">
			<h2 class="titulo">Login</h2>
		  <div class="form-group">
		    <label for="inputEmail1">Email</label>
		    <input type="email" class="form-control" id="inputEmail1"placeholder="Email">
		  </div>
		  <div class="form-group">
		    <label for="inputPassword">Contraseña</label>
		    <input type="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp" placeholder="Contraseña">
		    <a href="#"><small id="passwordHelp" class="form-text">¿Olvidaste tu contraseña?</small></a>
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="checkMantenerSesion">
		    <label class="form-check-label" for="checkMantenerSesion">Mantener iniciada la sesión</label>
		  </div>
		  <button type="submit" class="btn btn-primary">Entrar</button><br>
		  <a href="#">¿Todavía no tenes una cuenta? Registrate gratis acá</a>
		</form>
	</div>	
</body>
</html>