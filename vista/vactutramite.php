<body class="fondo"> 
<div class="edit">
                        	
<?php include("controlador/ctramite.php"); ?>
	<div class="eti">Editar Tramite</div>

	<form action="index.php?pag=4&id=<?= $idtramite?>" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="text" class="form-control" name="fecha" value="<?= $consultaedit[0]['fecha'] ?>"readonly required>
			<input type="hidden" name="idtramite" value="<?= $idtramite ?>">
			<input type="hidden" name="idcliente" value="<?= $consultaedit[0]['idcliente']  ?>">
			<input type="hidden" name="tipotramite" value="<?= $consultaedit[0]['tipotramite']  ?>">
            <input type="hidden" name="actu" value="actu">
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for="">Servicios:</label>
           <select class="chosen" data-order="true" name="multiselect[]" id="multiselect" multiple="true">
           		<option value="<?= $consultaedit[0]['servicios']  ?>" selected>Seleccion Pasada</option>
            	<option value="EPS">EPS</option>
                <option value="ARL">ARL</option>
                <option value="AFP">AFP</option>
                <option value="Caja de Compensacion">Caja de Compensacion</option>
            </select>
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for=""><span style="color:red;">* </span>Costo del Trámite:</label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <input type="text" class="form-control" name="costotramite" value="<?= $consultaedit[0]['costotramite'] ?>" pattern="[0-9]{1,11}" min="0" title="Solo se permiten numeros, máximo 11" required readonly>
            </div>
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
			<label for="">Descripción:</label>
            <input type="text" class="form-control" name="descripcion" value="<?= $consultaedit[0]['descripcion']  ?>"  maxlength="150">
         </div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Estado:</label>
           <select name="estado" class="form-control" required>
                    <option value="<?= $consultaedit[0]['estado']  ?>"><?= $consultaedit[0]['estado']  ?></option>
                    <option value="1">Pendiente</option>
                    <option value="2">Completo</option>
            </select>       
		</div>		
		<div class="form-group col-sm-6 col-md-4 col-lg-4"><br>
            <input type="submit" class="btn btn-success" value="Editar">
			<a href="index.php?pag=4" class="btn btn-success">Volver</a>
        </div>
	</form>  
   </div> 		                 
</body>

 <script type="text/javascript">
    	$(".chosen").chosen({
    		width: "350px",
    		enable_search_threshold: 10
		})
	</script>