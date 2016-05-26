
<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $utilidad = new Mconsulta();

$consultasalida = $utilidad->consultar_salida();
$consultaentrada = $utilidad->consultar_entrada();
$consultautilidad = $utilidad->consultar_utilidad();
?>
<div class="row">
<!--Inicio Salida-->
   <div class="col-md-4">
   <div class="etinfo">Egresos</div>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Egresos</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Salida</th>                
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultasalida);$i++): ?>
                <tr>                    
                    <td data-title='Fecha'><?= $consultasalida[$i]['fecha'] ?></td>
                    <td data-title='Salida'>$ <?= number_format($consultasalida[$i]['salida']) ?></td>  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
   </div>    
<!--Inicio Entrada-->
   <div class="col-md-4">
   <div class="etinfo">Ingresos</div>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Ingresos</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Entrada</th>                
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaentrada);$i++): ?>
                <tr>                    
                    <td data-title='Fecha'><?= $consultaentrada[$i]['fecha'] ?></td>
                    <td data-title='Entrada'>$ <?= number_format($consultaentrada[$i]['entrada']) ?></td>  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
   </div>    
<!--Inicio Utilidad-->
   <div class="col-md-4">
   <div class="etinfo">Utilidad</div>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="12">Utilidad</th>
            </tr>
            <tr>
                <th>Fecha</th>
                <th>Valor</th>                
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultautilidad);$i++): ?>
                <tr>                    
                    <td data-title='Fecha'><?= $consultautilidad[$i]['fecha'] ?></td>
                    <td data-title='Valor'>$ <?= number_format($consultautilidad[$i]['utilidad']) ?></td>  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
   </div>    
</div>
