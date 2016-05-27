<?php
	
	include('modelo/mcliente.php');

	$cliente = new Mcliente();

	$idclienteedit 	= isset($_POST['idcliente']) ? $_POST['idcliente'] : NULL;	
	$idtramitante   = isset($_POST['idtramitante']) ? $_POST['idtramitante'] : NULL;
	$cedula         = isset($_POST['cedula']) ? $_POST['cedula'] : NULL;
    $nombre     	= isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
    $celular 		= isset($_POST['celular']) ? $_POST['celular'] : NULL;
    $telefono    	= isset($_POST['telefono']) ? $_POST['telefono'] : NULL;
    $email       	= isset($_POST['email']) ? $_POST['email'] : NULL;
	$actu           = isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idcliente   	= isset($_GET['id']) ? $_GET['id'] : NULL;	
	

	/*
		Variables para traer los datos del desplegable
	*/
	$tramitante2= $cliente->sel_tramitante();

	/*
		Variables para aplicar el formato de Mayusculas y minusculas
	*/
	$newName 	= $cliente->sentence_case($nombre);

	/*
		Comprobacion datos para insertar
	*/
	if ($cedula && $nombre && !$actu) 
	{
        
		$cliente->insertar_cliente($idtramitante, $cedula, $newName, $celular, $telefono, $email);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idclienteedit && $nombre && $actu) 
	{
		$cliente->actualizar_cliente($idclienteedit, $idtramitante, $cedula, $newName ,$celular, $telefono, $email);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idcliente) 
	{
		$consultaedit = $cliente->consultar_cliente_id($idcliente);
	}