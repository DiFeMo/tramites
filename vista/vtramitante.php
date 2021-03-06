<?php include('controlador/ctramitante.php'); ?>

<div class="container-fluid lol">
<div class="eti">Registrar Tramitante</div>

	<form class="blanco" action="" method="POST">
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for=""><span style="color:red;">* </span>Nombre tramitante:</label>
            <input type="text" class="form-control" name="nombre" pattern="[A-z ]{2,50}" title="Solo se permiten letras máximo 50 caracteres" required>       
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Teléfono:</label>
            <input type="text" class="form-control" name="telefono" pattern="[0-9]{7,20}" title="Solo se permiten telefonos validos, minimo desde 7 numeros y máximo 20 caracteres">       
		</div>
		<div class="form-group col-sm-6 col-md-4 col-lg-4">
            <label for="">Email:</label>
            <input type="text" class="form-control" name="email" maxlength="30">       
		</div>
		 <div class="form-group col-sm-12 col-md-12 col-lg-12"> <br>          		
            <button type="submit" class="btn btn-success center-block" value="Insertar">Registrar <span class="icon-checkmark"></span></button>
        </div>
	</form>
</div>
<?php $consultatramitante = $tramitante->consultar_tramitante(); ?>
	<table id="" class="display" cellspacing="0" width="100%">
	   <thead>
            <tr>
                <th colspan="5">Listado de tramitantes</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Teléfono</th>               
                <th>E-mail</th>               
                <th>Edición</th>
            </tr>
        </thead>
        <tbody>
            <?php for($i=0;$i<count($consultatramitante);$i++): ?>
                <tr>
                    <td data-title='ID'><?= $consultatramitante[$i]['idtramitante'] ?></td>
                    <td data-title='Nombre'><?= $consultatramitante[$i]['nombre'] ?></td>
                    <td data-title='Teléfono'><?= $tramitante->formato_telefono_general($consultatramitante[$i]['telefono']) ?></td>                    
                    <td data-title='E-mail'><?= $consultatramitante[$i]['email'] ?></td>                                 
                    <td data-title='Edición'><a href="index.php?pag=9&id=<?= $consultatramitante[$i]['idtramitante'] ?>" class="btn btn-primary"><span class="icon-pencil2"></span></a></td>
                </tr>
            <?php endfor; ?>
            
        </tbody>
    </table>	
    </div>
    </div><!--/row-->
<br/><br/>  
<script type="text/javascript">
    $(document).ready(function () {
        $(".nav li").removeClass("active");//this will remove the active class from  
                                           //previously active menu item 
        $('#tramitante').addClass('active');
    });
</script>


<div class="logo">
          <img src="css/tramiteslogo.svg" width="140px" alt="Logo.svg"> 
      </div>