<?php
	
	/*  
        *   @Version: V1.0 19/07/16
    */

	include 'modelo/mentregado.php';

	$entregado = new Mentregado();

	$identregadoedit 	= isset($_POST['identregado']) ? $_POST['identregado'] : NULL;
	$fecha         		= isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
    $nombre    			= isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
    $documento 			= isset($_POST['documento']) ? $_POST['documento'] : NULL;
    $observacion   		= isset($_POST['observacion']) ? $_POST['observacion'] : NULL;
	$actu           	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$identregado   		= isset($_GET['id']) ? $_GET['id'] : NULL;

	/*
		Comprobacion datos para insertar
	*/
	if ($fecha && $nombre && $documento && !$actu) 
	{
        
		$entregado->insertar_entregado($fecha, $nombre, $documento, $observacion);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($identregadoedit && $fecha && $actu) 
	{
		$entregado->actualizar_entregado($identregadoedit, $fecha, $nombre ,$documento, $observacion);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($identregado) 
	{
		$consultaedit = $entregado->consultar_entregado_id($identregado);
	}