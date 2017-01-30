<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Usuarios</title>

<style type="text/css">
form {float:right;}
</style>

    <!-- Bootstrap -->
    
    <link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
/*funcion ajax que llena el combo dependiendo de la categoria seleccionada*/

</script>

  </head>
  
  <body>

  <div id="mensaje"><h3 align="center"><?=(isset($error))?$error:''?></h3></div>
  
  <h1 align="Center"><B><BIG>Datos del Usuario</BIG></B></h1>

<br><br>

     <div class"row">

     <!-- Este es el formulario para editar los registros, fijate como se llaman utilizando codigo php y la etiqueta datos que viene del controlador que llama a la vista -->   


    <div class="container">
  <div class="col-lg-8 col-lg-offset-2 well">
<div class ="row">
        <form name="form_porcion" action="<?= base_url().'usuario_controller/editar_perfil'?>" method="POST">
          <div class="row" style="margin-left: -35%">

            <!-- aqui puedes ver como cada uno de los campos en el formulario tomo un registro de la bd con el siguiente comando: <?php echo $datos->campo; ?> sustituyendo lo que dice campo con el campo de la BD  -->
            <div class="col-sm-6">
              <label>Usuario</label>
              <input type="text" id="nombre" name="nombre" value="<?php echo $datos->username; ?>"  class="form-control" required>
            </div>
          </div>

          <br>
          
            <div class="row"> 
            <div class="col-sm-6" style="margin-left: -50%">
              <label>Password</label>
              <!-- es campo tiene la opcion readonly como propiedad, al ser el identificador del registro no deberias dejar que lo editaran-->
              <input type="password" id="password1" name="password1" value="<?php echo $datos->password; ?>"  class="form-control" required>
            </div>
            <div class="col-sm-6">
              <label>Password 2</label>
              <input type="password" id="password2" name="password2" class="form-control" required>
            </div>
          </div>

          <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
          <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
          <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
          <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
         
            <br><br>
          <div class="col-sm-offset-4">
                <button class="btn btn-lg btn-danger" type="submit" value='login' name="datos" style="margin-left: -85%"> Editar Datos <span class="glyphicon glyphicon-file"></span></button></button>
          </div>  
  </div>
  </div>

  </form>

  </div>








    <script src="<?= base_url().'assents/js/bootstrap.min.js'?>"></script>

    <script src="<?= base_url().'assents/js/jquery.js'?>"></script>
  </body>
</html>
