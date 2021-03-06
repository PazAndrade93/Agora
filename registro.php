<?php
	//Validador de formulario de registro
	function validarRegistro($data){
	    $name = trim($data['name']);
		$lastname = trim($data['lastname']);
		$email = trim($data['email']);
		$fecha = trim($data['fecha']);
		$pass = trim($data['pass']);
		$pass2 = trim($data['pass2']);
	    $errores = [];

		//Validacion de nombre
	    if ($name == '') {
	        $errores['name']  = 'El campo es obligatorio';
	    }

	    //Validacion de apellido
	    if ($lastname == '') {
	        $errores['lastname']  = 'El campo es obligatorio';
	    }

	    //Validacion de email
	    if ($email == '') {
	        $errores['email']  = 'El campo es obligatorio';
	    }
	    elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
	        $errores['email']  = 'El campo no cuenta con un formato valido';
	    }
	    elseif (traerEmail($email)) {
	        $errores['email']  = 'Este email ya esta registrado';
	    }

	    //Validacion de fecha de nacimiento
	    $fechaArray = explode('/', $fecha);
	    if($fecha == ''){
	    	$errores['fecha']  = 'El campo es obligatorio';
	    }/*
		    $fechaArray[0] = Año
		    $fechaArray[1] = Mes
		    $fechaArray[2] = Dia
	    */
	    elseif (!$fechaArray) {
	    	$errores['fecha']  = 'El campo no cuenta con un formato valido';
	    }
	    elseif (count($fechaArray) != 3) {
	    	$errores['fecha']  = 'El campo no cuenta con un formato valido';
	    }
	    elseif (!is_numeric($fechaArray[0]) || !is_numeric($fechaArray[1]) || !is_numeric($fechaArray[2])) {
	    	$errores['fecha']  = 'El campo no cuenta con un formato valido';
	    }
	    elseif ((intval(date("Y")) - $fechaArray[0]) < 15) {
	    	$errores['fecha']  = 'No cumple requisito de edad necesaria';
	    }
	    elseif ($fechaArray[1] > 12) {
	    	$errores['fecha']  = 'El campo no cuenta con un formato valido';
	    }
	    elseif ($fechaArray[2] > 31) {
	    	$errores['fecha']  = 'El campo no cuenta con un formato valido';
	    }

	    //Validacion de contraseñas
	    if ($pass == '' || $pass2 == '') {
	        if ($pass == '') {
	        	$errores['pass']  = 'El campo es obligatorio';
	    	}
	    	if ($pass2 == '') {
	        	$errores['pass2']  = 'El campo es obligatorio';
	    	}
	    }
	    elseif ($pass != $pass2) {
	        $errores['pass']  = 'Tus contraseñas no coinciden';
	        $errores['pass2']  = 'Tus contraseñas no coinciden';
	    }
	    return $errores;
	}

	//Traer usuario por email (o false)
	function traerEmail($email){
	    $usuarios = traerTodos();
	    foreach ($usuarios as $usuario) {
	        if ($usuario['email'] == $email) {
	            return $usuario;
	        }
	    }
	    return false;
	}

	//Funcion para guardar un usuario en la "Base de datos"
	function guardarUsuario($data){
	    $usuario = [
	        'id' => traerUltimoID(),
	        "name" => $data['name'],
	        "lastname" => $data['lastname'],
	        "email" => $data['email'],
	        "fecha" => $data['fecha'],
	        "pass" => password_hash($data['pass'], PASSWORD_DEFAULT),
	        "src" => ''
	    ];
	    $usuarioJSON = json_encode($usuario);
	    var_dump($usuarioJSON);
	    file_put_contents('usuarios.json', $usuarioJSON . PHP_EOL, FILE_APPEND);
	}


	//Trae el proximo Id para la "Base de datos"
	function traerUltimoID(){
	    $todos = traerTodos();
	    if (count($todos) == 0) {
	        return 1;
	    }
	    $ultimo = array_pop($todos);
	    $ultimoID = $ultimo['id'];
	    return $ultimoID +1;
	}

	//Trae los usuarios de la "Base de datos"
	function traerTodos(){
	    $allUsers = file_get_contents('usuarios.json');
	    $arrayDeJSON = explode(PHP_EOL, $allUsers);
	    array_pop($arrayDeJSON);
	    $arrayPHP = [];
	    foreach ($arrayDeJSON as $usuario) {
	        $arrayPHP[] = json_decode($usuario, true);
	    }
	    return $arrayPHP;
	}

	$name = '';
	$lastname = '';
	$email = '';
	$fecha = '';
	$pass = '';
	$pass2 = '';
	$errores = [];

	if ($_POST) {
		$name = trim($_POST['name']);
		$lastname = trim($_POST['lastname']);
		$email = trim($_POST['email']);
		$fecha = trim($_POST['fecha']);
		$pass = trim($_POST['pass']);
		$pass2 = trim($_POST['pass2']);
		$errores = validarRegistro($_POST);

		if (empty($errores)) {
			guardarUsuario($_POST);
			header('location:perfil.php');
		}
	}
?>
<?php require_once("header.php");?>
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
					<div class="form-group <?= isset($errores['name']) ? 'inputError' : null ?>">
						<label for="inputNombre">Nombre</label>
						<input type="text" class="form-control" id="inputNombre" placeholder="Nombre" name="name" value="<?=$name?>">
						<span><?= isset($errores['name']) ? $errores['name'] : ''; ?></span>
					</div>
			  	</div>
			  	<div class="col-12 col-sm-6">
					<div class="form-group <?= isset($errores['lastname']) ? 'inputError' : null ?>">
						<label for="inputLastname">Apellido</label>
						<input type="text" class="form-control" id="inputLastname" placeholder="Apellido" name="lastname" value="<?=$lastname?>">
						<span><?= isset($errores['lastname']) ? $errores['lastname'] : ''; ?></span>
					</div>
			  	</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="form-group <?= isset($errores['email']) ? 'inputError' : null ?>">
						<label for="inputEmail1">Email</label>
						<input type="text" class="form-control" id="inputEmail1" placeholder="Email" name="email" value="<?=$email?>">
						<span><?= isset($errores['email']) ? $errores['email'] : ''; ?></span>
					</div>
			  	</div>
			  	<div class="col-12 col-sm-6">
					<div class="form-group <?= isset($errores['fecha']) ? 'inputError' : null ?>">
						<label for="inputFecha">Fecha de nacimiento</label>
						<input type="text" class="form-control" id="inputFecha" placeholder="AAAA/MM/DD" name="fecha" value="<?=$fecha?>">
						<span><?= isset($errores['fecha']) ? $errores['fecha'] : ''; ?></span>
					</div>
			  	</div>
			</div>
			<div class="row">
				<div class="col-12 col-sm-6">
					<div class="form-group <?= isset($errores['pass']) ? 'inputError' : null ?>">
						<label for="inputPassword">Contraseña</label>
						<input type="password" class="form-control" id="inputPassword" placeholder="Elegí una contraseña" name="pass" value="<?=$pass?>">
						<span><?= isset($errores['pass']) ? $errores['pass'] : ''; ?></span>
					</div>
			  	</div>
			  	<div class="col-12 col-sm-6">
					<div class="form-group <?= isset($errores['pass2']) ? 'inputError' : null ?>">
						<label for="inputPassword2">Repetí tu contraseña</label>
						<input type="password" class="form-control" id="inputPassword2" placeholder="Repetí tu contraseña" name="pass2" value="<?=$pass2?>">
						<span><?= isset($errores['pass2']) ? $errores['pass2'] : ''; ?></span>
					</div>
			  	</div>
			</div><br>
		  	<button type="submit" class="btn btn-outline-primary col-sm-6 offset-sm-3">Registrarse</button><br>
		  	<div class="col-sm-6 offset-sm-3 underButtonLink">
		  		<a href="login.php">¿Ya tenes una cuenta?</a>
		  	</div>
		</form>
	</div>
<?php require_once("footer.php");?>
