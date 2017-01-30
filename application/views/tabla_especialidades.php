<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#prueba").click(function(){
        $("#t_prueba").toggle();
    });
});
</script>


<link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">

<title>Modulo Especialistas</title>
</head>

<body>


<div id="mensaje"><h3 align="center"><?=(isset($error))?$error:''?></h3></div>


<br>

<div class="container">
    <div class="row" style="margin-left:-5%">

        <div class="col-md-3 col-sm-offset-3">
        <h1 align="center"><b>Lista de Especialidades</b></h1>

            <table class="table table-striped table-hover" cellpadding="60">
                 <thead>
                  
                  <td align="center"><b>Especialidad </b></th>

                  
                  </thead>
                  
                  
                  <tbody>
                  <?php foreach($especialistas as $row): ?>
                  <tr> 
                  
                    <td align="center"><?php echo $row->nombre; ?></td>

                  </tr>
                    <?php endforeach; ?>
                  </tbody>
            </table>
        </div>

        <div class="col-sm-3 col-sm-offset-1">

          <h1 align="center"><b>Agregar Especialidades</b></h1>

          <form name="form_prueba" action="<?= base_url().'especialista_controller/agregar_especialidades'?>" method="POST">
              <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
              <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
              <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
              <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >

              <label>Especialidad</label>
              <input type="especialidad" name="especialidad" class="form-control">

              <br>

              <div class="row col-sm-3" style="margin-left:19%"> 
                <button type="submit" value='login' name="datos" class="btn btn-info" >Agregar Especialidad</button>
              </div>
          </form>
          
        </div>


    </div>
    
</div>

</body>
</html>
