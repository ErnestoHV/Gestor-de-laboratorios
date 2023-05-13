<?php
$user = session();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <?php
                        
                        if($user->get('nombre_usuario')==""){
                            echo '<title>No se ha iniciado sesión</title>';
                        }else{
                            if($user->get('rol')==0 || $user->get('rol')==2 || $user->get('rol')==3){
                                    echo '<title>Registrar un usuario en capacitación</title>';
                                }
                            }
                        ?>
    <link rel="icon" type="image/png" href="../img/Escudo_BUAP_Negativo.png">

    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">

    <link href="../css/lib/toastr/toastr.min.css" rel="stylesheet">
    <link href="../css/lib/sweetalert/sweetalert.css" rel="stylesheet">
    <link href="../css/lib/rangSlider/ion.rangeSlider.css" rel="stylesheet">
    <link href="../css/lib/rangSlider/ion.rangeSlider.skinFlat.css" rel="stylesheet">
    <link href="../css/lib/barRating/barRating.css" rel="stylesheet">
    <link href="../css/lib/nestable/nestable.css" rel="stylesheet">
    <link href="../css/lib/jsgrid/jsgrid-theme.min.css" rel="stylesheet" />
    <link href="../css/lib/jsgrid/jsgrid.min.css" type="text/css" rel="stylesheet" />
    

    <link href="../css/lib/datatable/dataTables.bootstrap.min.css" rel="stylesheet" />
    <link href="../css/lib/data-table/buttons.bootstrap.min.css" rel="stylesheet" />
    <link href="../css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../css/lib/select2/select2.min.css" rel="stylesheet">
    <link href="../css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../css/lib/calendar/fullcalendar.css" rel="stylesheet" />

    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/AdminLTE.min.css">
    <link rel="stylesheet" href="../css/blue.css">

    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    
    <link href="../css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="../css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="../css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="../css/lib/themify-icons.css" rel="stylesheet">
    <link href="../css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../css/lib/weather-icons.css" rel="stylesheet" />
    <link href="../css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="../css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="../css/lib/helper.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
</head>
<?php
if($user->get('nombre_usuario') != ""):
?>
<body>
  <div  style= "background-color:  #2c729f ; height: 1000px; width: 100%">
  <nav  style="background-color:black;" class="hunix-login">
  <div class="container-fluid">
    <div class="navbar-header">
    <a><h1 style="color:white; font-weight:bolder; text-align: center">BUAP</h1></a>
    </div>
    <?php
    if($user->get('rol')==2 || $user->get('rol')==3){
        echo '    <ul class="nav navbar-nav navbar-right" style="text-align: center">
        <li><a href="alumno"><span class="ti-user"></span> '.$user->get('nombre_usuario').'</a></li> 
        </ul>';
    }
    ?>

  </div>
</nav>

  <div class="login-box">
      
      <div class="login-logo" style="color: white;">
          <b>Registrarse en una capacitación</b>
      </div>


      <?php if (session()->has('success')): ?>
  <div class="alert alert-success"><?= session('success') ?></div>
<?php endif ?>
      <form class="w3-container w3-card-4" action="<?= base_url('guardar_cap_usuarios'); ?>" method="post">
    <div class="login-box-body">
    <div class="form-group">
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Fecha y hora de finalización</label>
            <input type="datetime-local" class="form form-control-user" name="datetime-local" required>
        </div><br>

        <div class="form-group">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Usuario</label>
            <select class="form-control selct2" type="number" name="CapIdUsuario" required>
                <?php 
                if($user->get('rol') == 0||$user->get('rol') == 1){
                    foreach ($Dusuario as $usuarios){
                        echo '<option value="'.$usuarios['id_usuario'].'">'.$usuarios['nombre_usuario']." ".$usuarios['apellidos_usuario'].'</option>';}; 
                }else{
                    if($user->get('rol') == 2||$user->get('rol') == 3){
                        echo '<option value="'.$user->get("id_usuario").'">'.$user->get("nombre_usuario")." ".$user->get("apellidos_usuario").'</option>';
                    }
                }           
?>
            </select>
        </div><br>
        <div class="form-group">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Capacitación</label>
            <select class="form-control selct2" type="number" name="CapIdCapacitacion" required>
                <?php foreach ($Dcapacitacion as $capacitaciones){
                echo '<option value="'.$capacitaciones['id_capacitacion'].'">'.$capacitaciones['nombre_capacitacion'].'</option>';}; ?>
            </select>
        </div><br>
        <input type="submit" class="btn btn-success btn-lg" value="Registrar">
        <?php
        if($user->get('rol') == 0){
        echo '<a href="'. base_url("usuarios").'" class="btn btn-warning text-light text-bold btn-lg">Atras</a>';
        }else{
            if($user->get('rol') == 1){
                echo '<a href="'. base_url("laboratorios").'" class="btn btn-warning text-light text-bold btn-lg">Atras</a>';
            }else{
                if($user->get('rol') == 2||$user->get('rol') == 3){
                    echo '<a href="'. base_url("alumno").'" class="btn btn-warning text-light text-bold btn-lg">Atras</a>';
                }
        }
    }
        ?>
    </form>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-2.2.3.min.js"></script>
    <!-- jQuery 2.2.3 -->
    <script src="../js/bootstrap.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../js/npm.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/validar.js"></script>
    <script src="../js/usuarios.js"></script>
</body>
<?php else:
include_once ("../app/Views/errors/error_vistas.php");
echo '<div style="text-align:center;  overflow-x: auto; ">

        <div class="card" style="width: 40rem; margin-top: 100px; box-shadow: -10px 0px 30px rgba(255, 255, 255, 1.5);  background-color:black; margin:auto;">
        <div class="alert alert-danger" role="alert" style="width: 40rem; margin:auto; box-shadow: -20px 10px 30px rgba(  222, 0, 0 , .9);">
<b>ERROR :</b> Intento de acceso no permitido, por favor da <a href="' . (($user->get('nombre_usuario') == "") ? "login" : (($user->get('rol') == 2 || $user->get('rol') == 3) ? "alumno" : "")) . '" class="alert-link" style="color:black;">click aqui</a> para regresar.
</div>
  <img src="../img/danger.png" class="card-img-top" alt="...">
  <div class="card-body">
  <h2 class="card-title" style="color:red; font-weight:bolder;">Datos del usuario:</h2>
          <b style="color:white;">'.$user->get('nombre_usuario'). " ". $user->get('apellidos_usuario').'</b><br> ';
        if($user->get('nombre_usuario') == ""){
            echo '        
            <b style="color:white; font-size:small">NO LOGEADO</b>
            <b style="color:red; font-size:large"> ERROR</b>
            </div>
            </div> ';
        }else{
            if($user->get('rol') == 3){
                echo '<b style="color:white;">Alumno</b><br> 
                </div>
                </div> ';
            }else{
                if($user->get('rol') == 2){
                    echo '        
                    <b style="color:white;">Docente</b>
                    </div>
                    </div> ';  
                }
            }
        }
        
        ?>
    <?php endif; ?>
</html>