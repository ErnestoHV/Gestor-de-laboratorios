


$('#tablaUsuarios').on("click", ".btnEditarUsuario", function(){
    let idUsuario = $(this).attr("idUsuario")
    var datos =  new FormData()
    datos.append("idUsuario", idUsuario)
    $.ajax({
        url: "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function(respuesta) {
            console.log(respuesta)
            $("#EingUsuarioR").val(respuesta["matricula"]);
            $("#EingNombre").val(respuesta["nombre"]);
            $("#EingPaterno").val(respuesta["apellidos"]);
            $("#EingCorreo").val(respuesta["correo"]);
            $("#EingNSS").val(respuesta["nss"]);
            $("#Erol").val(respuesta["rol"]);
            $("#EingCarrera").val(respuesta["id_carrera"]);
            $("#idUsuario").val(respuesta["id_usuario"]);
        }

    })
})