<?php include("controlador/ccliente.php"); ?>

<div class="container-fluid lol">
<div class="eti">Registrar Cliente</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Cédula:</label>
            <input type="text" class="form-control" name="cedula"  pattern="[0-9]{1,11}" min="0" title="Solo se permiten numeros, máximo 11" required>     
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Nombre Completo:</label>
            <input type="text" class="form-control" name="nombre" pattern="[A-z ]{2,100}" title="Solo se permiten letras máximo 100 caracteres" required>           
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Celular:</label>
             <input type="text" class="form-control" name="celular" pattern="[0-9]{7,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 10 caracteres">    
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
             <label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono"  pattern="[0-9]{7,10}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 10 caracteres">           
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
           <label for="">E-mail:</label>
           <input type="text" class="form-control" name="email" maxlength="30">        
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Tramitante:</label>
           	<select name="idtramitante" class="chzn-select form-control" required>
				<option value=0>Seleccione opcion</option>
				<?php for($i=0;$i<count($tramitante2);$i++): ?>
					<option value="<?= $tramitante2[$i]['idtramitante'] ?>"><?= $tramitante2[$i]['nombre'] ?></option>
				<?php endfor; ?>
			</select>            
		</div>
		<div class="form-group col-sm-12 col-md-12 col-lg-12"> <br>  
            <button type="submit" class="btn btn-success center-block" value="Insertar">Registrar <span class="glyphicon glyphicon-check"></span></button>
        </div>
	</form>
</div>
<?php $consultacliente = $cliente->consultar_cliente(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Listado de Clientes</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre Completo</th>
                <th>Celular</th>
                <th>Teléfono</th>
                <th>E-mail</th>
                <th>Tramitante</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacliente);$i++): 
				$tramitante1 = $cliente->sel_tramitante1($consultacliente[$i]['idtramitante']);
			?>
				<tr>
					<td data-title='ID'><?= $consultacliente[$i]['idcliente'] ?></td>
					<td data-title='Cédula'><?= $consultacliente[$i]['cedula'] ?></td>
					<td data-title='Nombre'><?= $consultacliente[$i]['nombre'] ?></td>
					<td data-title='Celular'><?= $cliente->formato_telefono_general($consultacliente[$i]['celular']) ?></td>
					<td data-title='Telefono'><?= $cliente->formato_telefono_general($consultacliente[$i]['telefono']) ?></td>
					<td data-title='E-mail'><?= $consultacliente[$i]['email'] ?></td>
					<td data-title='Tramitante'><?= $tramitante1[0]['nombre'] ?></td>
					<td data-title='Edición'><a href="index.php?pag=7&id=<?= $consultacliente[$i]['idcliente'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
				</tr>
			<?php endfor; ?>
        </tbody>
    </table>
    <br>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                           //previously active menu item 
        $('#clientes').addClass('active');
    });
</script>