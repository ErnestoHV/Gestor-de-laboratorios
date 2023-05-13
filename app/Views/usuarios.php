
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
                            if($user->get('rol')==0){
                                    echo '<title>administrador - Usuarios</title>';
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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">

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
    <?php
    //if($user->get('nombre_usuario') != ""):
    ?>
</head>
<?php
if($user->get('nombre_usuario') != "" && $user->get('rol')==0):
?>
<body style="height: auto;">
<div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures" style=" height: 100%;">
            <div class="nano">
                <div class="nano-content">
                    <div class="logo"><a href="#" ><span>Gestor de laboratorios</span></a></div>
                    <ul >

                        <?php
                        
                        if($user->get('rol')==0){
                            echo '<div style="text-align: center;"><li class="label"><b>Administrador</b></li></div>';
                        }else{
                            if($user->get('rol')==1){
                                echo '<div style="text-align: center;"><li class="label"><b>Encargado de laboratorio</b></li></div>';
                            }
                        }
                        
                        ?>
                        <li><a class="sidebar-sub-toggle"><i class="ti-home"></i> Gestión <span class="badge badge-primary"></span> <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                            <?php if($user->get('rol')==0){ 
                               echo '<li><a href="usuarios">Usuarios</a></li>';
                               echo '<li><a href="registro_admin">Registro de usuarios</a></li>';
                               echo '<li><a href="laboratorios">Laboratorios</a></li>';
                               echo '<li><a href="equipos">Equipos</a></li>';
                               echo '<li><a href="prestamos">Préstamos</a></li>';
                               echo '<li><a href="capacitacion">Capacitación</a></li>'; 
                            }else{
                                if($user->get('rol')==1){
                                    echo '<li><a href="registro_admin">Registro de usuarios</a></li>';
                                    echo '<li><a href="laboratorios">Laboratorios</a></li>';
                                    echo '<li><a href="equipos">Equipos</a></li>';
                                    echo '<li><a href="prestamos">Préstamos</a></li>';
                                    echo '<li><a href="capacitacion">Capacitación</a></li>'; 
                                }
                            }                     
                                ?>
                            </ul>
                        </li>

                        <li class="label">Otros</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-blackboard"></i>  Capacitaciones  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                        <ul>
                            <?php if($user->get('rol')==0 || $user->get('rol')==1){ 
                                    echo '<li><a href="cap_usuarios">Capacitaciones y usuarios</a></li>';
                                    echo '<li><a href="cap_equipos">Capacitaciones y equipos</a></li>';  
                               
                            }              
                                ?>
                            </ul>
                            <?php if($user->get('rol')==0){
                                echo '<li><a class="sidebar-sub-toggle"><i class="ti-book"></i>  Documentación  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                                <ul>
                                    <li><a href="documentacion">Modelo Relacional</a></li>
                                </ul>';
                            }
                            ?>


                        <li class="label">Logout</li>
                        <li><a class="sidebar-sub-toggle"><i class="ti-lock"></i>  Salir  <span class="sidebar-collapse-icon ti-angle-down"></span></a>
                            <ul>
                        </li>
                        <li><a href="salir">Cerrar sesión</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /# sidebar -->


        <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">

                                <span class="user-avatar">Bienvenido, <?=  $user->get('nombre_usuario') ?></span>
                                
                                
                                </div>
                            </div>
                            <h1 class="h3 mb-2 text-gray-800">Tabla de usuarios</h1>
                        </div>
                        </div>
                        </div>
    





<!-- DataTales Example -->

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-lg" style="font-size:120%;">Lista de usuarios registrados</h6><br>
        <a href="<?= base_url('registro_admin'); ?>" class="btn btn-primary text-light text-bold">Registrar un nuevo usuario</a><br>
    </div>
    <div class="card-body">
        <div class="table-responsive">

        <?php if (session()->has('success')): ?>
            <div class="toast toast-success text-light" role="alert" style="font-size:110%;" aria-live="assertive" aria-atomic="true">
  <div class="d-flex">
  <div class="toast-body" style="margin-left:40%;"><?= session('success') ?></div>
  </div>
</div>
        <?php endif ?>

            <table class="table table-bordered tablaUsuarios" id="tablaUsuarios" width="100%" cellspacing="0">
                <thead>


                    
     <tr>
       <th>ID</th>
       <th>Matrícula</th>
       <th>Nombre</th>
       <th>Apellidos</th>
       <th>Correo</th>
       <th>Teléfono</th>
       <th>NSS</th>
       <th>Carrera</th>
       <th>Rol</th>
       <th>Modificar</th>
       <th>Eliminar</th>
     </tr>
     <?php foreach ($usuario as $indice1 => $usuarios):?>
        <?php foreach ($carrera as $indice2 => $carreras):?>
           <?php if($indice1 == $indice2):?>  
     <tr>
       <td><?= $usuarios['id_usuario']; ?></td>
       <td><?= $usuarios['matricula']; ?></td>
       <td><?= $usuarios['nombre_usuario']; ?></td>
       <td><?= $usuarios['apellidos_usuario']; ?></td>
       <td><?= $usuarios['correo_usuario']; ?></td>
       <td><?= $usuarios['telefono_usuario']; ?></td>
       <td><?= $usuarios['nss_usuario']; ?></td>
       <td><?= $carreras->nombre_carrera ?></td>
       <td><?= $usuarios['rol']; ?></td>  
       <td><a href="<?php echo base_url('modificar');?>"data-toggle="modal" data-target="#modalEditarUsuario<?php echo $usuarios['id_usuario'];?>"><i class="fa-solid fa-pencil" style="color: #1a8fc1;"></i></a></td>
       <td><a href="<?= base_url('UserModel/eliminar/'.$usuarios['id_usuario'])?>" onclick="return confirm('¿Está seguro que desea borrar este usuario?')"><i class="fa-solid fa-trash-can" style="color: #db0000;"></i></a></td>
     </tr>
     <?php include('modificar.php'); ?>
        
     <?php endif; ?>
     <?php endforeach; ?>
    <?php endforeach; ?>
     </table>
 </div>



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
        <!-- jquery vendor -->
        <script src="../js/lib/jquery.min.js"></script>
    <script src="../js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="../js/lib/menubar/sidebar.js"></script>
    <script src="../js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    
    <!-- bootstrap -->
    <script src="../js/lib/bootstrap.min.js"></script><script src="vistas/js/scripts.js"></script>
    <!-- scripit init-->


    <script src="../js/lib/bootstrap.min.js"></script><script src="vistas/js/scripts.js"></script>

</body>
<?php else:
include_once ("errors/error_vistas.php");
echo '<div style="text-align:center;  overflow-x: auto; ">

        <div class="card" style="width: 40rem; margin-top: 100px; box-shadow: -10px 0px 30px rgba(255, 255, 255, 1.5);  background-color:black; margin:auto;">
        <div class="alert alert-danger" role="alert" style="width: 40rem; margin:auto; box-shadow: -20px 10px 30px rgba(  222, 0, 0 , .9);">
<b>ERROR :</b> Intento de acceso no permitido, por favor da <a href="' .(($user->get('nombre_usuario') == '') ? "login" : (($user->get('rol') == 2 || $user->get('rol') == 3) ? "alumno" : (($user->get('rol') == 1) ? "laboratorios" : ""))). '" class="alert-link" style="color:black;">click aqui</a> para regresar.

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
                }else{
                    if($user->get('rol') == 1){
                        echo '
                        <b style="color:white;">Encargado</b>
                        </div>
                        </div> ';
                    }
                }
            }
        }
        
        ?>
    <?php endif; ?>

</html>