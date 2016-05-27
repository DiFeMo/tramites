<?php
	
	include('modelo/mtramite.php');

	$tramite = new Mtramite();

	$idtramiteedit 	= isset($_POST['idtramite']) ? $_POST['idtramite'] : NULL;	
	$idcliente   	= isset($_POST['idcliente']) ? $_POST['idcliente'] : NULL;
	$fecha         	= isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
    $tipotramite    = isset($_POST['tipotramite']) ? $_POST['tipotramite'] : NULL;
    $servicios 		= isset($_POST['multiselect']) ? $_POST['multiselect'] : NULL;
    $costotramite   = isset($_POST['costotramite']) ? $_POST['costotramite'] : NULL;
    $descripcion    = isset($_POST['descripcion']) ? $_POST['descripcion'] : NULL;
    $estado       	= isset($_POST['estado']) ? $_POST['estado'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idtramite   	= isset($_GET['id']) ? $_GET['id'] : NULL;	
	
	$newServicios = '';

	if($servicios){
	  foreach ($servicios as $valor) {
	    $newServicios = $newServicios." ".$valor;
	  }
	}

	/*
		Variables para traer los datos del desplegable
	*/
	$cliente2= $tramite->sel_cliente();

	/*
		Comprobacion datos para insertar
	*/
	if ($idcliente && $fecha && $tipotramite && $costotramite && $estado && !$actu) 
	{
        
		$tramite->insertar_tramite($idcliente, $fecha, $tipotramite, $newServicios, $costotramite, $descripcion, $estado);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idtramiteedit && $fecha && $actu) 
	{
		$tramite->actualizar_tramite($idtramiteedit, $idcliente, $fecha, $tipotramite ,$newServicios, $costotramite, $descripcion, $estado);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idtramite) 
	{
		$consultaedit = $tramite->consultar_tramite_id($idtramite);
	}