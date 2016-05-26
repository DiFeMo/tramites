<body class="fondo"> 
<div class="edit">
                        	
<?php include("controlador/cgastos.php"); ?>
	<div class="eti">Editar Gastos</div>

	<form action="index.php?pag=2&id=<?= $idgasto ?>" method="POST">
		<div class="form-group col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="text" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>" readonly required>
			<input type="hidden" name="idgasto" value="<?= $idgasto ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-md-6 col-lg-6">
			<label for="">Motivo:</label>
            <input type="text" class="form-control" name="motivo" value="<?= $consultaedit[0]['motivo']  ?>" maxlength="100" placeholder="Motivo del gasto">
		</div>
		<div class="form-group col-md-6 col-lg-6">
			<label for="">Valor:</label>
            <input type="text" class="form-control" name="valor" value="<?= $consultaedit[0]['valor']  ?>" pattern="[0-9]{1,11}" min="0" title="Solo se permiten numeros, máximo 11">
		</div>
		<div class="form-group col-md-6 col-lg-6">
			<label for="">Observacion:</label>
            <input type="text" class="form-control" name="observacion" value="<?= $consultaedit[0]['observacion']  ?>" maxlength="100" placeholder="Observacion adicional">
		</div>		
		<div class="form-group center-block col-sm-12 col-md-12 col-lg-12"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=2" class="btn btn-success">Volver</a>
        </div>
	</form>  
   </div> 		                 
</body>