<?php 
$user = session();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php
    if($user->get('rol')==2){
      echo '<title>Docente</title>';
    }else{
      if($user->get('rol')==3){
        echo '<title>Alumno</title>';
      }else{
        if($user->get('nombre_usuario')==""){
            echo '<title>No se ha iniciado sesión</title>';
        }
    }
    }
    ?>
    <link rel="icon" type="image/png" href="../img/Escudo_BUAP_Negativo.png">

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../assets/css/blue.css">
    <link rel="stylesheet" href="../assets/css/agenda.css" rel="stylesheet" id="bootstrap-css">

    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

<link href='assets/css/fullcalendar.css' rel='stylesheet' />
<link href='assets/css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='assets/js/jquery-1.10.2.js' type="text/javascript"></script>
<script src='assets/js/jquery-ui.custom.min.js' type="text/javascript"></script>
<script src='assets/js/fullcalendar.js' type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<?php
if($user->get('rol')==2 || $user->get('rol')== 3):
?>
</head>

<body class="hold-transition login-page" style="width:auto">

<nav class="navbar navbar-inverse" style="width:auto;">
  <div class="container-fluid" style="background-color: #001225 ">
    <div class="navbar-header" style="margin: 0 auto; display: block;">
    <a><h4 style="color:white; font-weight:bolder; text-align: center">BUAP</h4></a>
    </div>
   
    <ul class="nav navbar-nav navbar-right" style="text-align: center">
    <li><a href="alumno"><span class="glyphicon glyphicon-user"></span> <?=  $user->get('nombre_usuario') ?></a></li>
     <li ><a href="salir"><span class="glyphicon glyphicon-log-out"></span> Salir</a></li> 
    </ul>
  </div>
</nav>
<!--55-->
<div class="container">
    <div class="main-body">
    
          <!-- Breadcrumb -->
          <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb" style="background-color:#06195b;">
              <h4 style="color:white;">Bienvenido/a, <?php 
                      if($user->get('rol') == 3){
                        echo $user->get('nombre_usuario');
                      }else{
                        if($user->get('rol') == 2){
                        echo 'Maestro/a '. $user->get('nombre_usuario');
                      }}?> </h4>
            </ol>
          </nav>
          <!-- /Breadcrumb -->
    
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3" style="background-color:rgba(147, 175, 173, .8); border-style: dotted;">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php 
                      if($user->get('rol') == 3){
                        echo 'Alumno';
                      }else{
                        if($user->get('rol') == 2){
                        echo 'Docente';
                      }}?></h4>
                      <p class="text-secondary mb-1">
                        <?php 
                        if($user->get('id_carrera') == 1){
                        echo 'ISTII';
                      }else{ 
                        if($user->get('id_carrera') == 2){
                        echo 'IPGI';
                      }else{ if($user->get('id_carrera') == 3){
                        echo 'IAA';
                      }
                    }
                      };?></p>
                      <div style="margin-bottom:10px;">
                        <a class="btn btn-primary" href="<?= base_url('registro_prestamo');?>">Realizar préstamo</a>
                      </div>
                      <div style="margin-bottom:10px;">
                        <a href="<?= base_url('registro_cap_usuarios'); ?>" class="btn btn-primary">Registrarse en una capacitación</a><br>
                      </div>
                      <div style="margin-bottom:10px;">
                        <button type="button" id="btnMostrarP" class="btn btn-info" data-toggle="collapse" data-target="#prestamos">Ver mis préstamos</button>
                        <button type="button" id="btnOcultarP" style="display:none;" class="btn btn-info" data-toggle="collapse" data-target="#prestamos">Ocultar mis préstamos</button>
                      </div>
                      <div style="margin-bottom:10px;"> 
                        <button type="button" id="btnMostrarC" class="btn btn-info" data-toggle="collapse" data-target="#capacitacion">Ver mis cursos</button>
                        <button type="button" id="btnOcultarC" style="display:none;" class="btn btn-info" data-toggle="collapse" data-target="#capacitacion">Ocultar mis cursos</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="card mt-3">                
                <ul class="list-group list-group-flush">
                </ul>
              </div>
            </div>
            <div class="col-md-8">
            
                
                                <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0" style="font-weight:bold;">Nombre Completo</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                      <h4>
                        <?= $user->get("nombre_usuario")." ".$user->get("apellidos_usuario");?>
                      </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0" style="font-weight:bold;">Matrícula/ID</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h4>
                      <?= $user->get("matricula");?>
                    </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0" style="font-weight:bold;">Correo electrónico</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h4>
                    <?= $user->get("correo_usuario");?>
                    </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0" style="font-weight:bold;">Teléfono</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h4>
                      <?= $user->get('telefono_usuario');?>
                    </h4>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h5 class="mb-0" style="font-weight:bold;">N° de seguridad social</h5>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <h4>
                      <?= $user->get('nss_usuario');?>
                    </h4>
                    </div>
                  </div>
                  <hr>


                </div>
               

              </div>


<!-- Tabla de prestamos -->
              <div id="prestamos" class="collapse" style="text-align:center; width: 100%; ">
              <div style="background-color:rgba( 246, 235, 214 , .8); border-style: double; ">
                <h3 style="font-weight:bolder;">Tus préstamos</h3>
                <div style=" width: 100%; overflow-x: auto;">
                <table class="table table-bordered" style="background-color:white; width:100%; " cellspacing="0">
  <thead>
    <tr style="text-align: center; background-color: #e6e6e6; font-weight: bold;">
      <th style="text-align: center;">#</th>
      <th style="text-align: center;">Fecha de préstamos</th>
      <th style="text-align: center;">Hora de fin</th>
      <th style="text-align: center;">Hora de inicio</th>
      <th style="text-align: center;">Laboratorio</th>
      <th style="text-align: center;">Equipo</th>
      <th style="text-align: center;">Observaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php $contador = 1;
    foreach ($prestamo as $prestamos): 
      if (is_null($prestamos->nombre_equipo)) {
        echo 'El email del usuario es nulo';
    }
    
    ?>
      <tr>
        <td><?= $contador?></td>
        <td><?= $prestamos  ->fecha_prestamo;?></td>
        <td><?= $prestamos  ->hora_inicio_prestamo;?></td>
        <td><?= $prestamos  ->hora_fin_prestamo;?></td>
        <td><?= $prestamos  ->nombre_laboratorio;?></td>
        <td><?= $prestamos  ->nombre_equipo ?? "N/A";?></td>
        <td><?= $prestamos  ->observacion_prestamo;?></td>
      </tr>
    <?php $contador = $contador+1;
  endforeach; ?>
  </tbody>
</table>
</div>
  </div>
</div>

<!-- Tabla de capacitaciones -->
<div id="capacitacion" class="collapse" style="text-align:center; max-width: 100%;">
              <div style="background-color:rgba( 179, 219, 244 , .8); border-style: double; width: 100%; overflow-x: auto;">
              <h3 style="font-weight:bolder; text-align: center;">Tus cursos</h3>
              <div style=" width: 100%; overflow-x: auto;">
              <table class="table table-bordered" style="background-color:white; width: 100%; " cellspacing="0">
  <thead>
    <tr style="text-align: center; background-color: #e6e6e6; font-weight: bold;">
    <th style="text-align: center;">#</th>
      <th style="text-align: center;">Capacitación</th>
      <th style="text-align: center;">Fecha de inicio</th>
      <th style="text-align: center;">Fecha de finalización</th>
      <th style="text-align: center;">Instructor</th>
    </tr>
  </thead>
  <tbody>
    <?php $contador = 1;
    foreach ($capacitacion as $capacitaciones): ?>
      <tr>
        <td><?= $contador?></td>
        <td><?= $capacitaciones  ->nombre_capacitacion;?></td>
        <td><?= $capacitaciones  ->fecha_inicio_capacitacion;?></td>
        <td><?= $capacitaciones  ->fecha_fin_capacitacion;?></td>
        <td><?= $capacitaciones  ->nombre_instructor;?></td>
      </tr>
    <?php $contador = $contador+1;
  endforeach; ?>
  </tbody>
</table>
</div>
  </div>
</div>
<style>

body {
  margin-top: 0px;
  text-align: center;
  font-size: 14px;
  font-family: "Helvetica Nueue",Arial,Verdana,sans-serif;
  background-color: #17A2B8;
  }

#wrap {
  width: 1100px;
  margin: 0 auto;
  }


</style>
<script>
    $(document).ready(function() {
        $("#btnMostrarP").click(function() {
            $("#btnMostrarP").hide();
            $("#btnOcultarP").show();
        });

        $("#btnOcultarP").click(function() {
            $("#btnOcultarP").hide();
            $("#btnMostrarP").show();
        });

        $("#btnMostrarC").click(function() {
            $("#btnMostrarC").hide();
            $("#btnOcultarC").show();
        });

        $("#btnOcultarC").click(function() {
            $("#btnOcultarC").hide();
            $("#btnMostrarC").show();
        });
    });
</script>
</body>
<?php else:
include ("errors/error_vistas.php");
echo '<div style="text-align:center; width: 100%  overflow-x: auto; ">

        <div class="card" style="width: 60rem; height: auto; margin-top: 100px; box-shadow: -10px 0px 30px rgba(255, 255, 255, 1.5);  background-color:black; margin:auto;">
        <div class="alert alert-danger" role="alert" style="width: 60rem; margin:auto; box-shadow: -20px 10px 30px rgba(  222, 0, 0 , .9);">
        <h5 style="font-size:small">
        <b>ERROR:</b>
        Intento de acceso no permitido, por favor haga
        <a href="' . (($user->get('nombre_usuario') == "") ? "login" : (($user->get('rol') == 1) ? "laboratorios" : (($user->get('rol') == 0) ? "usuarios" : ""))) . '" class="alert-link" style="color:black;">click aqui.</a>
            clic aquí
        </a> para regresar.
    </h5>
    
</div>
  <img src="../img/danger.png" class="card-img-top" alt="...">
  <div class="card-body">
  <h2 class="card-title" style="color:red; font-weight:bolder;">Datos del usuario:</h2>
          <b style="color:white; font-size:small">'.$user->get('nombre_usuario'). " ". $user->get('apellidos_usuario').'</b><br> ';
        if($user->get('rol') == 0 && $user->get('nombre_usuario') == ""){
            echo '        
            <b style="color:white; font-size:small">NO LOGEADO</b>
            <b style="color:red; font-size:large"> ERROR</b>
            </div>
            </div> ';
        }else{
            if($user->get('rol') == 1){
                echo '<b style="color:white; font-size:small">Encargado de laboratorio</b><br> 
                </div>
                </div> ';
            }  else{
              if($user->get('rol') == 0 ){
                  echo '<b style="color:white;">Administrador</b>
                  </div>
                  </div> ';
              }
          }
        }
        
        ?>
    <?php endif; ?>
</html>
