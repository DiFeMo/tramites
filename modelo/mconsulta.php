<?php

	/*  
        *   @Version: V4 25/05/16
    */

	include('controlador/conexion.php');
	include('functions.php');

	class Mconsulta extends Funciones
	{
		public function __construct()
		{

		}
	
		/*
		 *función para la consulta de los datos de la consulta Salida
		 */
		function consultar_salida()
		{
			$sql = "SELECT * FROM cssalida";
			return $this->SeleccionDatos($sql);
		}	
        /*
		 *función para la consulta de los datos de la consulta Entrada
		 */
		function consultar_entrada()
		{
			$sql = "SELECT * FROM csentrada";
			return $this->SeleccionDatos($sql);
		}		
        /*
		 *función para la consulta de los datos de la consulta UtilidadxDia
		 */
		function consultar_utilidad()
		{
			$sql = "SELECT * FROM csutilidaddia";
			return $this->SeleccionDatos($sql);
		}		
	}
