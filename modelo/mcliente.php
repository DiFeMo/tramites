<?php

	include('controlador/conexion.php');
	include('functions.php');

	class Mcliente extends Funciones
	{
		public function __construct()
		{

		}
		
        /*
		 *función para el ingreso de los datos de la tabla tbcliente
		 */
		function insertar_cliente($idtramitante, $cedula, $nombre, $celular, $telefono, $email)
		{
			$sql = "INSERT INTO tbcliente (idtramitante, cedula, nombre, celular, telefono, email)
						VALUES ('".$idtramitante."','".$cedula."','".$nombre."','".$celular."','".$telefono."','".$email."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbcliente
		 */
		function  actualizar_cliente($idcliente,$idtramitante,$cedula,$nombre, $celular, $telefono, $email)
		{
			$sql = "UPDATE tbcliente SET idtramitante = '".$idtramitante."',cedula = '".$cedula."',nombre = '".$nombre."',celular = '".$celular."', telefono = '".$telefono."',email = '".$email."' WHERE idcliente = '".$idcliente."';";
			$this -> cons($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbcliente
		 */
		function consultar_cliente()
		{
			$sql = "SELECT * FROM tbcliente ORDER BY idcliente DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbcliente	
         */
		function consultar_cliente_id($idcliente)
		{
			$sql = "SELECT * FROM tbcliente WHERE idcliente = '$idcliente' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla empleado
		 */
		function sel_tramitante()        
		{
            $sql = "SELECT * FROM `tbtramitante`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla empleado
		 */
		function sel_tramitante1($idtramitante)
		{
			$sql = "SELECT * FROM tbtramitante WHERE idtramitante='".$idtramitante."';";
			return $this->SeleccionDatos($sql);
		}
	}