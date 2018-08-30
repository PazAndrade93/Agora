<?php
	class Cliente
	{
		private $numeroCliente;
		private $apellido;
		private $DNI;
		private $CUIT;

		public function setApellido($apellido)
		{
			$this->apellido = $apellido;
		}

		public function getApellido()
		{
			return $this->apellido;
		}
	}
?>