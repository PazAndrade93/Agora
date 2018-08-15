<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Registro - Agora</title>
</head>
<body>
	<div class="container-fluid contenedorPantallaCompleta">
		<div style="position: fixed; top: 0;">
			<a class="navbar-brand" href="index.php">
              <img src= "img/agora.png"  class="logo" alt="Brand">
            </a>
		</div>
		<div class="registerImg col-lg-5">
			<img src="img/registerMinimalistPic.png">
		</div>
		<div class="linearLayoutV loginForm col-12 col-lg-7">
			<form method="POST">
				<div class="row">
					<div class="col-12">
						<h2 class="titulo">Registro</h2><br>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-6">
					    <label for="inputNombre">Nombre</label>
				    	<input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="name">
				  	</div>
				  	<div class="col-12 col-sm-6">
					    <label for="inputLastname">Apellido</label>
				    	<input type="text" class="form-control" id="inputLastname" placeholder="Apellido" name="lastname">
				  	</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-6">
					    <label for="inputEmail1">Email</label>
				    	<input type="email" class="form-control" id="inputEmail1" placeholder="Email" name="email">
				  	</div>
				  	<div class="col-12 col-sm-6">
					    <label for="inputFecha">Fecha de nacimiento</label>
				    	<input type="text" class="form-control" id="inputFecha" placeholder="AAAA/MM/DD" name="fecha">
				  	</div>
				</div>
				<div class="row">
					<div class="col-12 col-sm-6">
					    <label for="inputPassword">Contraseña</label>
				    	<input type="password" class="form-control" id="inputPassword" placeholder="Elegí una contraseña" name="pass">
				  	</div>
				  	<div class="col-12 col-sm-6">
					    <label for="inputPassword2">Repetí tu contraseña</label>
				    	<input type="password" class="form-control" id="inputPassword2" placeholder="Repetí tu contraseña" name="pass2">
				  	</div>
				</div><br>
			  	<button type="submit" class="btn btn-outline-primary">Registrarse</button><br>
			  	<a href="login.php">¿Ya tenes una cuenta?</a>
			</form>
		</div>
	</div>	
</body>
</html>