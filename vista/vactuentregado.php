<!--  
    *   @Version: V1.0 19/07/16
-->

<body class="fondo"> 
<div class="edit">
                        	
<?php include 'controlador/centregado.php'; ?>
	<div class="eti">Editar Documento Entregado</div>

	<form action="index.php?pag=12&id=<?= $identregado?>" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="text" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>"readonly required>
			<input type="hidden" name="identregado" value="<?= $identregado ?>">
			<input type="hidden" name="documento" value="<?= $consultaedit[0]['documento']  ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
        <div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Nombre de la Persona que recibe el Documento:</label>
            <input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre'] ?>" pattern="[A-z ]{2,100}" title="Solo se permiten letras máximo 100 caracteres" required>
         </div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for="">Observación:</label>
            <input type="text" class="form-control" name="observacion" value="<?= $consultaedit[0]['observacion']  ?>"  maxlength="100">
         </div>		
		<div class="form-group col-sm-6 col-md-4 col-lg-5 col-lg-offset-5"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=12" class="btn btn-success">Volver</a>
        </div>
	</form>  
   </div> 		                 
</body>