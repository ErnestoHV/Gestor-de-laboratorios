function validarIngreso(){
    let usuario = $("uMatricula").val()
    if (usuario != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(usuario)){
            $("uMatricula").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#uMatricula").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    let pass = $("#uPassword").val()
    if (pass != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(pass)){
            $("#uPassword").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#uPassword").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    return true
}


//////////REGISTRO

function validarRegistro(){
    let nombre = $("#ingNombre").val()
    if (nombre != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(nombre)){
            $("#ingNombre").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#ingNombre").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    let usuario = $("#ingMatricula").val()
    if (usuario != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(usuario)){
            $("#ingMatricula").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#ingMatricula").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    let pass = $("#ingPassword").val()
    if (pass != ""){
        let expresion = /^[a-zA-Z0-9]*$/
        if(!expresion.test(pass)){
            $("#ingPassword").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">No se permiten caracteres especiales</div></div></div>')
            return false
        }
    }
    else{
        $("#ingPassword").parent().before('<div class="col-lg-12 mb-4"><div class="card bg-danger text-white shadow"><div class="card-body">Este campo es obligatorio</div></div></div>')
            return false
    }

    return true
}