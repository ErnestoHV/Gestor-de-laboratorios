function validarUsuario(){
    let usuario=document.getElementById("username").value;
if(usuario!=""){
    let expresion = /^[ a-z A-Z 0-9]*$/;
    if(!expresion.test(usuario)){
        document.getElementById("username").value;
        parent.before("<div  >error<div");
        alert("Error")
        return false
    }else{
        return false
    }
}
true
}
function validarContraseña(){
    let usuario=document.getElementById("uPassword").value;
if(contraseña!=""){
    let expresion = /^[ a-z A-Z 0-9]*$/;
    if(!expresion.test(contraseña)){
        document.getElementById("uPassword").value;
        parent.before("<div>error<div>");
        alert("Error");
        return false
    }else{
        return false
    }
}
true
}