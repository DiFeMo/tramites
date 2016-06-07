
<?php 
    include('estilos.php'); 
    include('modelo/mconsulta.php'); 
    $utilidad = new Mconsulta();

$consultasalida         = $utilidad->consultar_salida();
$consultaentrada        = $utilidad->consultar_entrada();
$consultautilidad       = $utilidad->consultar_utilidad();
$consultasalidames      = $utilidad->consultar_salida_mes();
$consultaentradames     = $utilidad->consultar_entrada_mes();
$consultautilidadmes    = $utilidad->consultar_utilidad_mes();
?>
<div class="row">
<input type="checkbox" id="spoiler2" />
<label for="spoiler2">Ingresos y Egresos por dia</label>
<div class="spoiler">
    <div class="info">
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
</div>

</div>
<div class="row">
<input type="checkbox" id="spoiler3" />
<label for="spoiler3">Ingresos y Egresos por mes</label>
<div class="spoiler">
    <div class="info">
<!--Inicio Salida mes-->
   <div class="col-md-4">
   <div class="etinfo">Egresos</div>
    <table id="" class="display" cellspacing="0" width="100%">
       <thead>
            <tr>
                <th colspan="12">Egresos</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th> 
                <th>Salida</th>                  
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultasalidames);$i++): ?>
                <tr>                    
                    <td data-title='Mes'><?= $consultasalidames[$i]['mes'] ?></td>
                    <td data-title='Año'><?= $consultasalidames[$i]['year'] ?></td>
                    <td data-title='Salida'>$ <?= number_format($consultasalidames[$i]['salida_mes']) ?></td>  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
   </div>    
<!--Inicio Entrada mes-->
   <div class="col-md-4">
   <div class="etinfo">Ingresos</div>
    <table id="" class="display" cellspacing="0" width="100%">
       <thead>
            <tr>
                <th colspan="12">Ingresos</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Entrada</th>                
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultaentradames);$i++): ?>
                <tr>                    
                    <td data-title='Mes'><?= $consultaentradames[$i]['mes'] ?></td>
                    <td data-title='Año'><?= $consultaentradames[$i]['year'] ?></td>
                    <td data-title='Entrada'>$ <?= number_format($consultaentradames[$i]['entrada_mes']) ?></td>  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
   </div>    
<!--Inicio Utilidad mes-->
   <div class="col-md-4">
   <div class="etinfo">Utilidad</div>
    <table id="" class="display" cellspacing="0" width="100%">
       <thead>
            <tr>
                <th colspan="12">Utilidad</th>
            </tr>
            <tr>
                <th>Mes</th>
                <th>Año</th>
                <th>Valor</th>                
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultautilidadmes);$i++): ?>
                <tr>                    
                    <td data-title='Mes'><?= $consultautilidadmes[$i]['mes'] ?></td>
                    <td data-title='Año'><?= $consultautilidadmes[$i]['year'] ?></td>
                    <td data-title='Valor'>$ <?= number_format($consultautilidadmes[$i]['utilidad_mes']) ?></td>  
                </tr>
            <?php endfor; ?>
        </tbody>
    </table> 
   </div> 
</div>
</div>

</div>
<br><br>
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                           //previously active menu item 
        $('#caja').addClass('active');
    });
</script>