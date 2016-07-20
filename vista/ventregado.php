<!--  
    *   @Version: V1.0 19/07/16
-->

<?php include 'controlador/centregado.php'; ?>

<div class="container-fluid lol">
<div class="eti">Registrar Documento Entregado</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="text" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly required>           
		</div>
        <div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for=""><span style="color:red;">* </span>Nombre de la Persona que recibe el Documento:</label>
            <input type="text" class="form-control" name="nombre" pattern="[A-z ]{2,100}" title="Solo se permiten letras máximo 100 caracteres" required>
        </div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for=""><span style="color:red;">* </span>Tipo de Documento:</label>
           		<select name="documento" class="form-control" required>
                    <option value="">Seleccione una Opción</option>
                    <option value="1">Afiliacion Dependiente</option>
                    <option value="2">Afiliación Independiente</option>
                    <option value="3">Afiliacion Domestica</option>
                    <option value="4">SG - SST</option>
                    <option value="5">Derecho Laboral</option>
                    <option value="6">Creación de Empresa</option>
                    <option value="7">Trámite General</option>
            	</select>    
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-6">
            <label for="">Observación:</label>
            <input type="text" class="form-control" name="observacion" maxlength="100">           
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-12"> <br>  
            <button type="submit" class="btn btn-success center-block" value="Insertar">Registrar <span class="glyphicon glyphicon-check"></span></button>
        </div>
	</form>
</div>
<?php $consultaentregado = $entregado->consultar_entregado(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Listado de Documentos Entregados</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Nombre de la persona que recibe</th>
                <th>Documento</th>
                <th>Observación</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaentregado);$i++): ?>
				<tr>
					<td data-title='ID'><?= $consultaentregado[$i]['identregado'] ?></td>
					<td data-title='Fecha'><?= $consultaentregado[$i]['fecha'] ?></td>
					<td data-title='Nombre'><?= $consultaentregado[$i]['nombre'] ?></td>
					<td data-title='Documento'><?= $consultaentregado[$i]['documento'] ?></td>
					<td data-title='Observacion'><?= $consultaentregado[$i]['observacion'] ?></td>
					<td data-title='Edición'><a href="index.php?pag=13&id=<?= $consultaentregado[$i]['identregado'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
    </table>
    <br>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".nav li").removeClass("active");//this will remove the active class from  
                                                //previously active menu item 
            $('#entregado').addClass('active');
         });
	</script>