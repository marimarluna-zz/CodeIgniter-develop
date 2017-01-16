<html>


    <script type="text/javascript" src="<?= base_url().'assents/jq/jquery.min.js'?>"></script>

<head>

<link href="<?= base_url().'assents/css/dropdown-submenu.css'?>" rel="stylesheet">

<nav class="navbar navbar-default sidebar " role="navigation" style="background:#0EC20B ;">
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only" >Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>

    <ul class="nav navbar-nav navbar-left">

  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li> <a href="<?=base_url().'home'?>"><img style="max-width: 100px; margin-top: 7%; margin-left: -15%"
             src="<?=base_url().'assents/img/nhisres100.png'?>"></a></li>  
        <!-- <li style="margin-top: 7%; font-size: 24" ><a href="<?php echo base_url();?>usuarios_controller" >Mi Perfil</a></li> -->
        <div class="container">
        <div class="row col-sm-2">
            <form action="<?php echo base_url(); ?>especialista_controller" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Especialista </button>
		 <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
              </div>
            </form>
            </div>
	<div class="row col-sm-2">
            <form action="<?php echo base_url(); ?>especialista_controller" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Especialista </button>
		 <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
              </div>
            </form>
            </div>
		
		
		<div class="row col-sm-2">
            <form action="<?php echo base_url(); ?>especialista_controller" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Especialista </button>
		 <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
              </div>
            </form>
            </div>
		
		<div class="row col-sm-2">
            <form action="<?php echo base_url(); ?>especialista_controller" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Especialista </button>
		 <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
              </div>
            </form>
            </div>
		
		<div class="row col-sm-2">
            <form action="<?php echo base_url(); ?>especialista_controller" method="POST">
              <div class="col-sm-4 col-md-offset-4 " >
                 <button class="btn btn-lg btn-success btn-block" type="submit" name="submit" value="login"><span class="glyphicon glyphicon-check"></span> Registrar Especialista </button>
		 <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
		 <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
              </div>
            </form>
            </div>
      </div>     

		  
      </ul>
    </div>




    </ul>    
  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <div class="collapse navbar-collapse navbar-ex1-collapse">
   

    <ul class="nav navbar-nav navbar-right">
      <li>
        <h5><a><b><span class="glyphicon glyphicon-user"></span> <?php echo $usuario; ?></b></a></h5>
      </li>
      <li>
        <a style="margin-top: -6%;" href="<?php echo base_url(); ?>home/logout"><b>Salir <span class="glyphicon glyphicon-share-alt"></span></b></a>
      </li>
    </ul>


  </div>
</nav>
  
    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>
  <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

</head>
<body>




</body>
</html>
