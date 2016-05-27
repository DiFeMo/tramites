<?php include("controlador/ctramite.php"); ?>

<script language="javascript">
	function mostrarservicios(val){
				if (document.getElementById){ //se obtiene el id
					var el = document.getElementById('mosserv'); //se define la variable "el" igual a nuestro div
					el.style.display = 'none';
					if (val == '1' || val == '2' || val == '6'){
						el.style.display = 'block';
					}else{
						el.style.display = 'none';
					}
				}
	}
</script>

<div class="container-fluid lol">
<div class="eti">Registrar Trámite</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="text" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly required>           
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for=""><span style="color:red;">* </span>Cliente:</label>
            <select name="idcliente" class="chzn-select form-control" required>
				<option value=0>Seleccione cliente</option>
				<?php for($i=0;$i<count($cliente2);$i++): ?>
					<option value="<?= $cliente2[$i]['idcliente'] ?>"><?= $cliente2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for=""><span style="color:red;">* </span>Tipo de Trámite:</label>
           		<select name="tipotramite" onchange="javascript:mostrarservicios(this.value);" class="form-control" required>
                    <option value="">Seleccione una Opción</option>
                    <option value="1">Afiliacion Dependiente</option>
                    <option value="2">Afiliación Independiente</option>
                    <option value="3">SG - SST</option>
                    <option value="4">Derecho Laboral</option>
                    <option value="5">Creación de Empresa</option>
                    <option value="6">Trámite General</option>
            	</select>    
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6" id="mosserv">
            <label for="">Servicios:</label>
            <select class="chosen" data-order="true" name="multiselect[]" id="multiselect" multiple="true">
            	<option value="EPS">EPS</option>
                <option value="ARL">ARL</option>
                <option value="AFP">AFP</option>
                <option value="Caja de Compensacion">Caja de Compensacion</option>
            </select>
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
           <label for=""><span style="color:red;">* </span>Costo del Trámite:</label>
           <input type="text" class="form-control" name="costotramite"  pattern="[0-9]{1,11}" min="0" title="Solo se permiten numeros, máximo 11" required>        
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
             <label for="">Descripción:</label>
            <input type="text" class="form-control" name="descripcion" maxlength="150">           
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
           <label for=""><span style="color:red;">* </span>Estado:</label>
           <select name="estado" class="form-control" required>
                    <option value="">Seleccione una Opción</option>
                    <option value="1">Pendiente</option>
                    <option value="2">Completo</option>
            </select>           
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6"> <br>  
            <button type="submit" class="btn btn-success center-block" value="Insertar">Registrar <span class="glyphicon glyphicon-check"></span></button>
        </div>
	</form>
</div>
<?php $consultatramite = $tramite->consultar_tramite(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Listado de trámites</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Tipo de Trámite</th>
                <th>Servicios</th>
                <th>Costo del Trámite</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultatramite);$i++): 
				$cliente1 = $tramite->sel_cliente1($consultatramite[$i]['idcliente']);
			?>
				<tr>
					<td data-title='ID'><?= $consultatramite[$i]['idtramite'] ?></td>
					<td data-title='Cliente'><?= $cliente1[0]['nombre'] ?></td>
					<td data-title='Fecha'><?= $consultatramite[$i]['fecha'] ?></td>
					<td data-title='Tipo de tramite'><?= $consultatramite[$i]['tipotramite'] ?></td>
					<td data-title='Servicios'><?= $consultatramite[$i]['servicios'] ?></td>
					<td data-title='Costo del trámite'>$ <?= number_format($consultatramite[$i]['costotramite']) ?></td>
					<td data-title='Descripcion'><?= $consultatramite[$i]['descripcion'] ?></td>
					<td data-title='Estado'><?= $consultatramite[$i]['estado'] ?></td>
					<td data-title='Edición'><a href="index.php?pag=5&id=<?= $consultatramite[$i]['idtramite'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
    </table>
    <br>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".nav li").removeClass("active");//this will remove the active class from  
                                                //previously active menu item 
            $('#tramite').addClass('active');
         });
    	$(".chosen").chosen({
    		width: "520px",
    		enable_search_threshold: 10
		})
	</script>
    <script type="text/javascript">
   
</script>