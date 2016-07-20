<?php

	include 'controlador/conexion.php';
	include 'functions.php';

	class Mtramite extends Funciones
	{
		public function __construct()
		{

		}
		
        /*
		 *función para el ingreso de los datos de la tabla tbtramite
		 */
		function insertar_tramite($idcliente, $fecha, $tipotramite, $servicios, $costotramite, $descripcion, $estado)
		{
			$sql = "INSERT INTO tbtramite (idcliente, fecha, tipotramite, servicios, costotramite, descripcion, estado)
						VALUES ('".$idcliente."','".$fecha."','".$tipotramite."','".$servicios."','".$costotramite."','".$descripcion."','".$estado."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbtramite
		 */
		function  actualizar_tramite($idtramite,$idcliente,$fecha,$tipotramite, $servicios, $costotramite, $descripcion, $estado)
		{
			$sql = "UPDATE tbtramite SET idcliente = '".$idcliente."',fecha = '".$fecha."',tipotramite = '".$tipotramite."',servicios = '".$servicios."', costotramite = '".$costotramite."',descripcion = '".$descripcion."',estado = '".$estado."' WHERE idtramite = '".$idtramite."';";
			$this -> cons($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbtramite
		 */
		function consultar_tramite()
		{
			$sql = "SELECT * FROM tbtramite ORDER BY idtramite DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbtramite	
         */
		function consultar_tramite_id($idtramite)
		{
			$sql = "SELECT * FROM tbtramite WHERE idtramite = '$idtramite' ";
			return $this -> SeleccionDatos($sql);
		}
		 /*
		 	Función para la seleccion de la tabla cliente
		 */
		function sel_cliente()        
		{
            $sql = "SELECT * FROM `tbcliente`";
            return $this->SeleccionDatos($sql);
        }
        /*
		 	Función para la seleccion especifica de los datos de la tabla cliente
		 */
		function sel_cliente1($idcliente)
		{
			$sql = "SELECT * FROM tbcliente WHERE idcliente='".$idcliente."';";
			return $this->SeleccionDatos($sql);
		}
	}