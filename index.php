<!DOCTYPE html>
<html lang="en">
<head>
	<title>Tramites</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--<link rel="shortcut icon" href="imagen/icono4.png">-->
	
	<link rel="stylesheet" href="css/bootstrap.min.css"/>  	
  <link rel="stylesheet" href="css/bootstrap-responsive.css"/>
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.11/css/jquery.dataTables.min.css"/>
	<link rel="stylesheet" href="css/responsive.dataTables.min.css"/>
  <link rel="stylesheet" href="css/prueba.css"/>
	<link rel="stylesheet" href="css/estilo.css">
	<link rel="stylesheet" href="fonts/style.css">        
	<link rel="stylesheet" href="css/chosen.css">
	<link rel="stylesheet" href="css/chosen-bootstrap.css">
	<link rel="stylesheet" href="css/animate.css"/> 
	<script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/chosen.jquery.js"></script>
  <script src="js/script.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-tab.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
  <script src="js/dataTables.responsive.min.js"></script>

</head>
<body>
<?php
  date_default_timezone_set('America/Bogota');
?>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
    			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      			</button>
      			<a class="navbar-brand active" href="index.php">Tramites</a>
    		</div>
			<div class="collapse navbar-collapse" id="myNavbar">
    			<ul class="nav navbar-nav">
      				<li id="gastos"><a href="index.php?pag=2">Gastos</a></li>
              <li id="tramite"><a href="index.php?pag=4">Tramites</a></li>
              <li id="clientes"><a href="index.php?pag=6">Clientes</a></li>
              <li id="tramitante"><a href="index.php?pag=8">Tramitantes</a></li>
              <li id="entregado"><a href="index.php?pag=12">Entregado</a></li>
              <li id="caja"><a href="index.php?pag=11">Caja</a></li>
      				<li id="creditos"><a href="index.php?pag=10"><span class="glyphicon glyphicon-eye-open"></a></li>
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
      if ($page == 12) 
      {
        include 'vista/ventregado.php';
      }
      if ($page == 13) 
      {
        include 'vista/vactuentregado.php';
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