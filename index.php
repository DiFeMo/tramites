<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tramites</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="shortcut icon" href="imagen/icono4.png">-->
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>  	
  <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	<link rel="stylesheet" href="css/tablaResponsive.css"/>
	<link rel="stylesheet" href="css/datatable.css"/>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="fonts/style.css">        
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/chosen-bootstrap.css">
	<script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/chosen.jquery.js"></script>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/jquery-datatable.js"></script>
  	
</head>
<body>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand" href="index.php">Tramites</a>
    		</div>
			<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav">
      				<li class="active"><a href="home.php?pag=2">Gastos</a></li>
              <li><a href="home.php?pag=4">Tramites</a></li>
              <li><a href="home.php?pag=6">Clientes</a></li>
              <li><a href="home.php?pag=8">Tramitantes</a></li>
               <li><a href="index.php?pag=11">Caja</a></li>
      				<li><a href="home.php?pag=10"><span class="glyphicon glyphicon-eye-open"></a></li>
    			</ul>
  		</div>
	</nav>
    <div class="container">  		
		<?php
			$page = isset($_GET['pag']) ? $_GET['pag'] : NULL;
			if ($page == 2) 
			{
        include("vista/vgastos.php");
			}
      if ($page == 3) 
      {
        include("vista/vactugastos.php");
      }
      if ($page == 4) 
			{
        include("vista/vtramite.php");
			}
      if ($page == 5) 
      {
        include("vista/vactutramite.php");
      }
      if ($page == 6) 
			{
        include("vista/vcliente.php");
			}
      if ($page == 7) 
      {
        include("vista/vactucliente.php");
      }
      if ($page == 8) 
			{
        include("vista/vtramitante.php");
			}
      if ($page == 9) 
      {
        include("vista/vactutramitante.php");
      }
      if ($page == 10) 
      {
        include("vista/vcreditos.php");
      }
        if ($page == 11) 
      {
        include("vista/vcsutilidad.php");
      }
       
		?>
    </div>
    <!--Script para control de la tabla-->
      <script type="text/javascript">
        $(document).ready(function() {
          $('table.display').DataTable({
            responsive: true,
            "language": {
            "lengthMenu": "Mostrar _MENU_ registros por página",
            "zeroRecords": "No hay registros",
            "info": "Mostrando Página _PAGE_ de _PAGES_",
            "infoEmpty": "No existen registros para mostrar",
            "search": "Buscar:",
            "paginate": {
              "first": "Primero",
              "last": "Ultimo",
              "next": "Siguiente",
              "previous": "Anterior"
             }
           }
          });
        } );
      </script>
</body>
</html>