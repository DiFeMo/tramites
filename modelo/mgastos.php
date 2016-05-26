<?php

	/*  
        *   @Version: V2 24/05/16
    */

	include('controlador/conexion.php');
	include('functions.php');

	class Mgastos extends Funciones
	{
		public function __construct()
		{

		}
        /*
		 *función para el ingreso de los datos de la tabla tbgastos
		 */
		function insertar_gastos($fecha, $motivo, $valor, $observacion)
		{
			$sql = "INSERT INTO tbgastos (fecha, motivo, valor, observacion)
						VALUES ('".$fecha."','".$motivo."','".$valor."','".$observacion."');";
			$this -> cons($sql);
		}
		/*
		 *función para la actualización de los datos de la tabla tbgastos
		 */
		function  actualizar_gastos($idgasto, $fecha, $motivo, $valor, $observacion)
		{
			$sql = "UPDATE tbgastos SET  fecha = '".$fecha."', motivo = '".$motivo."', valor = '".$valor."', observacion = '".$observacion."' WHERE idgasto = '".$idgasto."';";
			$this -> cons($sql);
		}
		/*
		 *función para la elimnar datos de la tabla tbgastos
		 */
		/*function eliminar_gastos($idgastos)
		{
			$sql = "DELETE FROM `tbgastos` WHERE `idgastos` = '$idgastos'";
			$this -> cons($sql);
		}	
		/*
		 *función para la consulta de los datos de la tabla tbgastos
		 */
		function consultar_gastos()
		{
			$sql = "SELECT * FROM tbgastos ORDER BY idgasto";
			return $this->SeleccionDatos($sql);
		}
		/*
    	 *	Función para retornar los datos de la tbgastos	
         */
		function consultar_gastos_id($idgasto)
		{
			$sql = "SELECT * FROM tbgastos WHERE idgasto = '$idgasto' ";
			return $this -> SeleccionDatos($sql);
		}
	}