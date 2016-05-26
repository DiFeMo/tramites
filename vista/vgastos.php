<?php include('controlador/cgastos.php'); ?>

<div class="container-fluid lol">
<div class="eti">Registro de Gastos</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Fecha:</label>
            <input type="date" class="form-control" name="fecha" value="<?php echo date('Y-m-d'); ?>" readonly required>       
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Motivo:</label>
            <input type="text" class="form-control" name="motivo" maxlength="100" placeholder="Motivo del gasto">       
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for=""><span style="color:red;">* </span>Valor:</label>
            <input type="number" class="form-control" name="valor" pattern="[0-9]{1,11}" min="0" title="Solo se permiten numeros, máximo 11">       
		</div>
		<div class="form-group col-sm-6 col-md-6 col-lg-6">
            <label for="">Observacion:</label>
            <input type="text" class="form-control" name="observacion" maxlength="100" placeholder="Observacion adicional">       
		</div>
		 <div class="form-group col-sm-12 col-md-12 col-lg-12"> <br>          		
            <button type="submit" class="btn btn-success center-block" value="Insertar">Registrar <span class="glyphicon glyphicon-check"></span></button>
        </div>
	</form>
</div>
<?php $consultagastos = $gastos->consultar_gastos(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Listado de Gastos</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Valor</th>
                <th>Observación</th>
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultagastos);$i++): ?>
                <tr>
                    <td data-title='ID'><?= $consultagastos[$i]['idgasto'] ?></td>
                    <td data-title='Fecha'><?= $consultagastos[$i]['fecha'] ?></td>
                    <td data-title='Motivo'><?= $consultagastos[$i]['motivo'] ?></td>
                    <td data-title='Valor'>$ <?= number_format($consultagastos[$i]['valor']) ?></td>
                    <td data-title='Observacion'><?= $consultagastos[$i]['observacion'] ?></td>                 
                    <td data-title='Edición'><a href="index.php?pag=3&id=<?= $consultagastos[$i]['idgasto'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
    <br>