<?php include('controlador/cgastos.php'); ?>

<div class="container-fluid lol">
<div class="eti">Registro de Gastos</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="nombre" value="<?php echo date('Y-m-d'); ?>" required>       
		</div>
		<div class="form-group campo">
            <label for="">Motivo:</label>
            <input type="text" class="form-control" name="telefono" pattern="[0-9]{7,20}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres">       
		</div>
		<div class="form-group campo">
            <label for=""><span style="color:red;">* </span>Valor:</label>
            <input type="text" class="form-control" name="direccion" maxlength="50">       
		</div>
		<div class="form-group campo">
            <label for="">Observacion:</label>
            <input type="text" class="form-control" name="email" maxlength="30">       
		</div>
		 <div class="form-group campo"> <br>          		
            <button type="submit" class="btn btn-success" value="Insertar">Registrar <span class="glyphicon glyphicon-check"></span></button>
        </div>
	</form>
</div>
<?php $consultacliente = $cliente->consultar_cliente(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="3">Listado de Clientes</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>E-mail</th>
                <th>Detalle</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultacliente);$i++): ?>
                <tr>
                    <td data-title='ID'><?= $consultacliente[$i]['idcliente'] ?></td>
                    <td data-title='Nombre'><?= $consultacliente[$i]['nombre'] ?></td>
                    <td data-title='Teléfono'><?= $cliente->formato_telefono_general($consultacliente[$i]['telefono']) ?></td>
                    <td data-title='Dirección'><?= $consultacliente[$i]['direccion'] ?></td>
                    <td data-title='E-mail'><?= $consultacliente[$i]['email'] ?></td>
                    <td data-title='Detalle'><?= $consultacliente[$i]['detalle'] ?></td>                  
                    <td data-title='Edición'><a href="home.php?pag=22&id=<?= $consultacliente[$i]['idcliente'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>	

    <?php $consultexistencia = $existencia->consultar_existencia(); ?>
    <table id="" class="display" cellspacing="0" width="100%">
       <thead>
            <tr>
                <th colspan="12">Existencias</th>
            </tr>
            <tr>
                <th>Referencia</th>
                <th>Tipo de dispositivo</th>
                <th>Marca</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultexistencia);$i++): ?>
                <tr>
                    <td data-title='Referencia'><?= $consultexistencia[$i]['referencia'] ?></td>
                    <td data-title='Tipo de Dispositivo'><?= $consultexistencia[$i]['nombre'] ?></td>
                    <td data-title='Marca'><?= $consultexistencia[$i]['marca'] ?></td>
                    <td data-title='Cantidad'><?= $consultexistencia[$i]['SumaDecantidad'] ?></td>
                    <td data-title='Precio'>$ <?= number_format($consultexistencia[$i]['precio']) ?></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 