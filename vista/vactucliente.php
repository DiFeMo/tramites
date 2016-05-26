<body class="fondo"> 
<div class="edit">
                        	
<?php include("controlador/ccliente.php"); ?>
	<div class="eti">Editar Cliente</div>

	<form action="index.php?pag=6&id=<?= $idcliente?>" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Cedula:</label>
            <input type="text" class="form-control" name="cedula" value="<?= $consultaedit[0]['cedula'] ?>" pattern="[0-9]{1,11}" min="0" title="Solo se permiten numeros, máximo 11" required>
			<input type="hidden" name="idcliente" value="<?= $idcliente ?>">
			<input type="hidden" name="idtramitante" value="<?= $consultaedit[0]['idtramitante']  ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for=""><span style="color:red;">* </span>Nombre Completo:</label>
            <input type="text" class="form-control" name="nombre" value="<?= $consultaedit[0]['nombre']  ?>" pattern="[A-z ]{2,100}" title="Solo se permiten letras máximo 100 caracteres" required>
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for="">Celular:</label>
            <input type="text" class="form-control" name="celular" value="<?= $consultaedit[0]['celular']  ?>"pattern="[0-9]{7,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 10 caracteres">
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="<?= $consultaedit[0]['telefono']  ?>"  pattern="[0-9]{7,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 10 caracteres">
         </div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for="">Email:</label>
            <input type="text" class="form-control" name="email" value="<?= $consultaedit[0]['email']  ?>" maxlength="30">
		</div>		
		<div class="form-group col-sm-6 col-md-4 col-lg-4"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=6" class="btn btn-success">Volver</a>
        </div>
	</form>  
   </div> 		                 
</body>