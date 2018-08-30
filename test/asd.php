<?php
	require_once("Cliente.php");
	$cliente = new Cliente();
	$cliente->setApellido("Monica");
?>

<html>
	<body>
		<?php echo $cliente->getApellido(); ?>
	</body>
</html>