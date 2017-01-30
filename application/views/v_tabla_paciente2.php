<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<link href="<?= base_url().'assents/css/bootstrap.min.css'?>" rel="stylesheet">
<title>Modulo Paciente</title>
</head>

<body>


<div id="mensaje"><h3 align="center"><?=(isset($error))?$error:''?></h3></div>


<br>

<div class="container">
    <div class="row">

        <div class="col-sm-6 col-sm-offset-3">
        <h1 align="center"><b>Lista de Pacientes</b></h1>
                <form name="form_prueba" action="<?= base_url().'especialista_controller/buscar_pa'?>" method="POST">
                    <div class=" col-md-6 ">
                        <input type="text" placeholder="Buscar por Nombre/Apellido/Cedula/Socio" id="busqueda" name="busqueda" class="form-control col-sm-2" required> 
                    </div>
                    <div class="col-sm-4 form-group">
                        <select requird class="form-control " name="filtro" id="filtro">
                            <option value="nombre" >Nombre</option>
                            <option value="apellido" >Apellido</option>
                            <option value="ci_especialista" >Cedula</option>
                            <option value="ci_especialista_asociado" >Especialista Asociado</option>
                       </select>
                  </div>
                    <div class="row col-sm-1"> 
                        <button type="submit" value='login' name="datos" class="btn btn-success" > <span class="glyphicon glyphicon glyphicon-search"> </span></button>
                    </div>
                              <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                              <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                              <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                              <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
                </form>
                <form action="<?php echo base_url(); ?>paciente_controller/tabla_paciente" method="POST">
                    <div class="col-sm-1 col-md-offset-1" style="margin-top:-3%"> 
                            <button type="submit" value='login' name="datos" class="btn btn-danger" > Limpiar </button>
                    </div>
                              <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                              <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                              <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                              <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" >
                </form>
            <table class="table table-striped table-hover" cellpadding="60">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Cedula</th>
                        <th>Telefono</th>
                        <th>Especialista Asociado</th>
                        <th>Editar</th>
                        <th>Ver</th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($deptlist); ++$i) { ?>
                    <tr>
                        <td><?php echo $deptlist[$i]->nombre; ?></td>
                        <td><?php echo $deptlist[$i]->apellido; ?></td>
                        <td><?php echo $deptlist[$i]->ci_paciente; ?></td>
                        <td><?php echo $deptlist[$i]->telefono; ?></td>
                        <td><?php echo $deptlist[$i]->ci_especialista_asociado; ?></td>
                        <td><div class="col-md-12"> 
                                <form name="form_prueba" action="<?= base_url().'paciente_controller/buscar'?>" method="POST">
                                    <div class="" style="display:none">
                                        <input type="text" min="1" id="ci_paciente" name="ci_paciente" value="<?php echo $deptlist[$i]->ci_paciente;?>" class="form-control col-sm-2"> 
                                    </div>
                    <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                    <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                    <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                    <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
                                    <div class="row col-sm-3" style="margin-left:5%"> 
                                        <button type="submit" value='login' name="datos" class="btn btn-success" > <span class="glyphicon glyphicon-user"> </span></button>
                                    </div>
                                </form>
                            </div>     
                        </td>
                        <td><div class="col-md-12"> 
                                <form name="form_prueba" action="<?= base_url().'paciente_controller/ver'?>" method="POST">
                                    <div class="" style="display:none">
                                        <input type="text" min="1" id="ci_paciente" name="ci_paciente" value="<?php echo $deptlist[$i]->ci_paciente;?>" class="form-control col-sm-2"> 
                                    </div>
                    <input style="display:none" type="text" id="usuario" name="usuario" value="<?php echo $usuario; ?>"  class="form-control" >
                    <input style="display:none" type="text" id="clave" name="clave" value="<?php echo $password; ?>"  class="form-control" >
                    <input style="display:none" type="text" id="perfil" name="perfil" value="<?php echo $perfil; ?>"  class="form-control" >
                    <input style="display:none" type="text" id="id" name="id" value="<?php echo $id; ?>"  class="form-control" > 
                                    <div class="row col-sm-3" style="margin-left:5%"> 
                                        <button type="submit" value='login' name="datos" class="btn btn-success" > <span class="glyphicon glyphicon-user"> </span></button>
                                    </div>
                                </form>
                            </div>     
                        </td>
                        
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
            <div class="row" id="prueba_2">
        <div class="col-md-10 text-center">
            <?php echo $pagination; ?>
        </div>
    </div>
        </div>
    </div>
    
</div>

</body>
</html>
