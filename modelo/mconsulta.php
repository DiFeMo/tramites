<?php

	/*  
        *   @Version: V4 06/06/16
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
		/*
		 *función para la consulta de los datos de la salida por mes
		 */
		function consultar_salida_mes()
		{
			$sql = "SELECT month(`cssalida`.`fecha`) AS `mes`,year(`cssalida`.`fecha`) AS `year`,sum(`cssalida`.`salida`) AS `salida_mes` 
					from `cssalida` group by month(`cssalida`.`fecha`),year(`cssalida`.`fecha`)";
			return $this->SeleccionDatos($sql);
		}
		/*
		 *función para la consulta de los datos de la entrada por mes
		 */
		function consultar_entrada_mes()
		{
			$sql = "SELECT month(`csentrada`.`fecha`) AS `mes`,year(`csentrada`.`fecha`) AS `year`,sum(`csentrada`.`entrada`) AS `entrada_mes` 
					from `csentrada` group by month(`csentrada`.`fecha`),year(`csentrada`.`fecha`)";
			return $this->SeleccionDatos($sql);
		}
		 /*
		 *función para la consulta de los datos de la consulta UtilidadxMes
		 */
		function consultar_utilidad_mes()
		{
			$sql = "SELECT month(`csutilidaddia`.`fecha`) AS `mes`,year(`csutilidaddia`.`fecha`) AS `year`,sum(`csutilidaddia`.`utilidad`) AS `utilidad_mes` 
					from `csutilidaddia` group by month(`csutilidaddia`.`fecha`),year(`csutilidaddia`.`fecha`)";
			return $this->SeleccionDatos($sql);
		}
	}
