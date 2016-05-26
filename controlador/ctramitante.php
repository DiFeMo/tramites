<?php
	
	include('modelo/mtramitante.php');

	$tramitante = new Mtramitante();

	$idtramitanteedit = isset($_POST['idtramitante']) ? $_POST['idtramitante'] : NULL;
	$nombre        = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
	$telefono      = isset($_POST['telefono']) ? $_POST['telefono'] : NULL;	
    $email         = isset($_POST['email']) ? $_POST['email'] : NULL;	
	$actu          = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idtramitante     = isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Variables para aplicar el formato de Mayusculas y minusculas
	*/
	$newName = $tramitante->sentence_case($nombre);
	/*
		Comprobar si las variables de nombre y detalle tienen datos, de ser asi se procede a enviarle los parametros
		a la funcion insertar_tramitante
	*/
	if ($nombre && !$actu) 
	{
		$tramitante->insertar_tramitante($newName, $telefono, $email);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idtramitanteedit && $nombre && $actu) 
	{
		$tramitante->actualizar_tramitante($idtramitanteedit,$newName,$telefono,$email);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idtramitante) 
	{
		$consultaedit = $tramitante->consultar_tramitante_id($idtramitante);
	}