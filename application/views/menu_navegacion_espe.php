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
          <a class="navbar-brand" href="#">Brand</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Home</a></li>
            <li><form name="form_prueba" action="<?= base_url().'Paciente_controller'?>" method="POST">
		    <div class="" style="display:none">
			<input type="text" id="id" name="id" class="form-control col-sm-2"> 
		    </div>
			<button type="submit" value='login' style="margin-top:9%" name="datos" class="btn btn-info">Crear Paciente</button>    
		</form></li>
            <li><form name="form_prueba" action="<?= base_url().'paciente_controller/buscar_paciente'?>" method="POST">
		    <div class="" style="display:none">
			<input type="text" id="id" name="id" class="form-control col-sm-2"> 
		    </div>
			<button type="submit" value='login' style="margin-top:9%" name="datos" class="btn btn-info">Lista de pacientes</button>    
		</form></li>
            <li>			
		<form name="form_prueba" action="<?= base_url().'paciente_controller/buscar_paciente'?>" method="POST">
		    <div class="" style="display:none">
			<input type="text" id="id" name="id" class="form-control col-sm-2"> 
		    </div>
			<button type="submit" value='login' style="margin-top:9%" name="datos" class="btn btn-info">Buscar Paciente</button>    
		</form>				
	    </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
    
  </div><!-- /.container-fluid -->


</head>
<body>
</body>
</html>
