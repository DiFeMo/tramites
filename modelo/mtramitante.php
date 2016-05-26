<?php
	include('controlador/conexion.php');
	include('functions.php');

	class Mtramitante extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbtramitante
		 */
		function insertar_tramitante($nombre, $telefono, $email)
		{
			$sql = "INSERT INTO tbtramitante (nombre, telefono, email)
						VALUES ('".$nombre."','".$telefono."','".$email."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbtramitante
		 */
		function  actualizar_tramitante($idtramitante, $nombre, $telefono, $email)
		{
			$sql = "UPDATE tbtramitante SET  nombre = '".$nombre."', telefono = '".$telefono."', email = '".$email."' WHERE idtramitante = '".$idtramitante."';";
			$this -> cons($sql);
		}		
		/*
		 *función para la consulta de los datos de la tabla tbtramitante
		 */
		function consultar_tramitante()
		{
			$sql = "SELECT * FROM tbtramitante ORDER BY idtramitante DESC";
			return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbtramitante	
         */
		function consultar_tramitante_id($idtramitante)
		{
			$sql = "SELECT * FROM tbtramitante WHERE idtramitante = '$idtramitante' ";
			return $this -> SeleccionDatos($sql);
		}
	}
