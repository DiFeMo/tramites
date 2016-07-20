<?php

	/*  
        *   @Version: V1.0 19/07/16
    */

	include 'controlador/conexion.php';
	include 'functions.php';

	class Mentregado extends Funciones
	{
		public function __construct()
		{

		}
		
        /*
		 *función para el ingreso de los datos de la tabla tbentregado
		 */
		function insertar_entregado($fecha, $nombre, $documento, $observacion)
		{
			$sql = "INSERT INTO tbentregado (fecha, nombre, documento, observacion)
						VALUES ('".$fecha."','".$nombre."','".$documento."','".$observacion."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbentregado
		 */
		function  actualizar_entregado($identregado, $fecha, $nombre, $documento, $observacion)
		{
			$sql = "UPDATE tbentregado SET fecha = '".$fecha."',nombre = '".$nombre."',documento = '".$documento."', observacion = '".$observacion."' WHERE identregado = '".$identregado."';";
			$this -> cons($sql);
		}
		/*
		 *función para la consulta de los datos de la tabla tbentregado
		 */
		function consultar_entregado()
		{
			$sql = "SELECT * FROM tbentregado ORDER BY identregado DESC";
			 return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbentregado	
         */
		function consultar_entregado_id($identregado)
		{
			$sql = "SELECT * FROM tbentregado WHERE identregado = '$identregado' ";
			return $this -> SeleccionDatos($sql);
		}
	}