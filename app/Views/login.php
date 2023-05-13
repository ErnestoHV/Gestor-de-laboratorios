<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
<body class="bg-primary" style= "height: auto; width: 100%">
<style>
        #login {
            border-radius: 20px;
            color:white;
            background-color: #0063c2  ;
            width: 100px; 
            height: 50px;
            font-weight:bold;
            margin-bottom:10%;
        }
        #login:hover{
            border: 2px solid blue; 
            color: blue; 
            background-color:white;
            border-radius: 20px;
        }
        .password-container {
            position: relative;
        }

        #toggle-password {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-25%);
            cursor: pointer;
            color:black; 
            weight:100%; 
            height:100%;
        }
    </style>
<div>
    <nav  style="background-color:black;" class="hunix-login">
      <div class="container-fluid">
        <div class="navbar-header">
            <header>
        <div style= "height: 85px; width: 85px; text-align: center;">
            <img src="../img/Escudo_BUAP_Negativo.png"  width="100%" length="100%" >
        </div>
        <div style="text-align: center;">
            <h1 style="color:white; font-weight:bolder;">BUAP</h1>
        </div>
      </header>
        </div>
        
      </div>
    </nav>
    
    <div class="login-box ">
        
        <div class="login-logo">
            <b>Bienvenido</b>
        </div>  

        <div id="alerta_pass" style="display: flex; background-color: orange; flex-direction: column; font-weight: bold; align-items: center;">

</div>

        <!-- /.login-logo -->
        <div class="login-form">
            <h2 class="login-box-msg">Iniciar Sesión</h2>
            
            <!-- start display error message -->
            <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                       <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>
            <!-- end display error message -->
    
            <form  class="user" method="POST" onsubmit="return validarLogin()" action="<?php echo base_url(); ?>/SigninController/loginAuth">
                <div class="text-danger">
                </div>
                <div class="form-group">
                <label for="username">Ingresa tu matrícula/ID</label>
                    <input type="text" name="username" id="username" class="form-control" style="font-size:13px" placeholder="Matrícula de alumno/ID de trabajador" >
                    
                </div>
                <div class="form-group">
                <label for="password">Contraseña</label>
                    <div class="password-container">
                        <input type="password" name="uPassword" id="uPassword" class="form-control" style="font-size:13px" placeholder="Contraseña">
                        <i class="ti-eye" id="toggle-password"></i> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                        </div>
                    </div>

                    <div class="col-xxl-4">
                        <button type="submit"  id="login">Ingresar</button>
                    </div>
                </div>
            </form>
            <p>No tienes cuenta? <a href="registro" style="font-weight:bolder; color:blue;">Registrate aquí</a></p>
        </div>



    </div>
    
</div>

<script>
    //FUNCIÓN PARA MOSTRAR CONTRASEÑA
    const togglePassword = document.querySelector('#toggle-password');
    const passwordField = document.querySelector('#uPassword');

    togglePassword.addEventListener('click', function() {
        const type = passwordField.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordField.setAttribute('type', type);
    })


    function validarLogin() {
    var input_mat = document.getElementById("username").value;
    var contraseña = document.getElementById("uPassword").value;

    if(input_mat == "" || contraseña == ""){
        var mensaje = "Por favor rellene todos los campos";
			    var alerta = document.createElement("div");
			    alerta.className = "alerta";
			    alerta.innerHTML = mensaje;
			    document.getElementById("alerta_pass").appendChild(alerta);
				    return false;
    }
    }
</script>

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
</html>