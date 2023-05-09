<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    
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
<body class="bg-info" style= "height: 1000px; width: 100%">
  <div>
  <nav  style="background-color:black;" class="hunix-login">
    <div class="container-fluid">
      <div class="navbar-header">
          <header >
      <a><h1 style="color:white; margin-left:15px; font-weight:bolder; text-align: center">BUAP</h1></a>
    </header>
      </div>
  
    <div>
      <ul class="nav navbar-nav navbar-right ">
        <li><a style="text-align: center" href="<?= base_url('login'); ?>" class="text-light text-bold"><i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión </a></li>
      </ul>
    </div>
  </nav>

  <div class="login-box">
      
      <div class="login-logo">
          <b>Registrate aquí</b>
      </div>
      <?php if (session()->has('success')): ?>
  <div class="alert alert-warning" style="text-align: center;"><?= session('success') ?></div>
<?php endif ?>
<div id="alerta_pass" style="display: flex; flex-direction: column; align-items: center;">

</div>
      <form class="w3-container w3-card-4" action="<?= base_url('guardar'); ?>" id="my_form" onsubmit="return validateForm()" method="post">
    <div class="login-box-body">
    <div class="form-group">
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Matricula/ID</label>
            <input type="text" class="form form-control-user text-dark" id="mat" name="mat" required>
        </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Nombre</label>
            <input type="text" class="form form-control-user" name="nom" required>
        </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Apellidos</label>
            <input type="text" class="form form-control-user" name="ape" required>
        </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Correo</label>
            <input type="email" class="form form-control-user" name="corr" required>
        </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Teléfono</label>
            <input type="telefono" class="form form-control-user" name="tel" required>
        </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label ">Numero de Seguridad Social (NSS)</label>
            <input type="text" class="form form-control-user"  name="nss">
        </div><br>
       <div class="form-group">
         <br><label class="col-sm-5 col-form-label ">Contraseña</label>
         <input type="password"  class="form form-control-user" name="pass" id="pass" required>
      </div>
        <div class="form-group">
            <label class="col-sm-5 col-form-label " for="inputPassword3" >Carrera</label>
            <select class="form-control selct2" type="number" name="carrera" required>
                <?php foreach ($carrera as $carreras){
                echo '<option value="'.$carreras['id_carrera'].'">'.$carreras['nombre_carrera'].'</option>';}; ?>
            </select>
        </div>
        <div class="form-group"> 
            <label for="inputPassword3" class="col-sm-5 col-form-label " type="number">Rol</label>
            <select class="form-control select2" name="rol" required>
                <option value=3>Alumno</option>
            </select>
        </div>
        <input type="submit" class="btn btn-success btn-lg" value="Registrar">
    </form>

    <script>

		function validateForm() {
            
			var input_mat = document.getElementById("mat").value;
            var contrasena = document.getElementById("pass").value;
			// Comprobar si la contraseña cumple con los requisitos
			var expresionRegular = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
            let expresion = /^[a-zA-Z0-9]*$/;
			if (!expresionRegular.test(contrasena)) {
                var mensaje = "La contraseña debe tener al menos 8 caracteres, una letra mayúscula y un número y no contener caracteres especiales";
			    var alerta = document.createElement("div");
			    alerta.className = "alerta";
			    alerta.innerHTML = mensaje;
			    document.getElementById("alerta_pass").appendChild(alerta);
				    return false;
			}
            }
			if (input_mat.match(/[a-zA-Z]+.*\d+|\d+.*[a-zA-Z]+/)) {
				alert("Hemos detectado un ID de trabajador, para ser registrado como maestro por favor vaya con el Encargado de laboratorio para hacer el cambio");
				return true;
			}else{
                if(!input_mat.match(/[0-9]/)){
                    return true;
                }
            }
        
        
	</script>
    <style>
		.alerta {
			background-color: #f2dede;
			color: #a94442;
			border: 2px solid #ebccd1;
            width: auto;
			padding: 10px;
			margin-bottom: 10px;
			border-radius: 5px;

		}
	</style>
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