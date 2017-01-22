<html>
<head>


  <div class="container-fluid">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default" style="background:#0EC20B">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>inicio" >Inicio</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          
          <ul class="nav navbar-nav navbar-right">
            <div class="row col-sm-12">
		    <div class="col-sm-3">
			    <form name="form_prueba" action="<?= base_url().'Paciente_controller'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
			<button type="submit" value='login' style="margin-top:9%" name="datos" class="btn btn-info">Crear Paciente</button>    
		</form>		
		    </div>
		    <div class="col-sm-3">
			    <form name="form_prueba" action="<?= base_url().'paciente_controller/tabla'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
			<button type="submit" value='login' style="margin-top:9%" name="datos" class="btn btn-info">Lista de Pacientes</button>    
		</form>		
		    </div>
		    <div class="col-sm-3">
			    <form name="form_prueba" action="<?= base_url().'paciente_controller/buscar_paciente'?>" method="POST"><input  style = "display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
							  <input style = "display:none"  type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
			<button type="submit" value='login' style="margin-top:9%" name="datos" class="btn btn-info">Buscar Paciente</button>    
		</form>		
		    </div>
		    <div class="col-sm-1">	 
			    <h5><a><b><span class="glyphicon glyphicon-user"></span> <?php echo $usuario; ?></b></a></h5>
		    </div>
		    <div class="col-sm-1">
			<h5><a href="<?php echo base_url(); ?>login"><b><span class="glyphicon glyphicon-share-alt"></span>Salir</b></a></h5>    
		    </div>
	    </div>
          </ul>
		
		
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
  </div><!-- /.container-fluid -->


</head>
<body>
</body>
</html>
