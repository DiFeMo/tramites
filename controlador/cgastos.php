<?php
	
	include('modelo/mgastos.php');

	$gastos = new Mgastos();

	$idgastosedit 	= isset($_POST['idgastos']) ? $_POST['idgastos'] : NULL;
	$fecha        	= isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
	$motivo      	= isset($_POST['motivo']) ? $_POST['motivo'] : NULL;
	$valor    		= isset($_POST['valor']) ? $_POST['valor'] : NULL;
    $observacion    = isset($_POST['observacion']) ? $_POST['observacion'] : NULL;
	/*$idgastoseli  = isset($_POST['idgastoseli']) ? $_POST['idgastoseli'] : NULL;*/
	$actu          	= isset($_POST['actu']) ? $_POST['actu'] : NULL;
	$idgastos     	= isset($_GET['id']) ? $_GET['id'] : NULL;	

	/*
		Comprobar si las variables de fecha y detalle tienen datos, de ser asi se procede a enviarle los parametros
		a la funcion insertar_gastos
	*/
	if ($fecha && $valor && !$actu) 
	{
		$gastos->insertar_gastos($fecha, $motivo, $valor, $observacion);
	}
	/*
		Comprobacion datos para actualizar
	*/
	if ($idgastosedit && $fecha && $actu) 
	{
		$gastos->actualizar_gastos($idgastosedit,$fecha,$motivo,$valor,$observacion);
	}
	/*
		Comprobar el id para editar ese unico registro
	*/
	if ($idgastos) 
	{
		$consultaedit = $gastos->consultar_gastos_id($idgastos);
	}