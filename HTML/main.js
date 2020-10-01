/* function validar() {
    var nombre, apeliidos, correo, usuario, clave, telefono, expresion;
    nombre = document.getElementById("Nombre").value;
    apeliidos = document.getElementById("Apellidos").value;
    correo = document.getElementById("Correo").value;
    usuario = document.getElementById("Usuario").value;
    clave = document.getElementById("Clave").value;
    telefono = document.getElementById("Telefono").value;
    expresion = /\w+@\w+\.+[a-z]/;

    if(nombre === "" || apeliidos === "" || correo === "" || usuario === "" || clave === "" || telefono === "") {

        alert("Todos los campos son obligatorios");
        return false;
    }
    if(nombre.length>30) {
        alert("El nombre es muy largo");
        return false;
    }
    if(apeliidos.length>80) {
        alert("Los apellidos son muy largos ");
        return false;
    }
    if(correo.length>100) {
        alert("El correo es muy largo");
        return false;
    }
    if(!expresion.test(correo)){
        alert("el correo no es valido ");
        return false;
    }
    if(usuario.length>80 || clave.length>20) {
        alert("El usuario y la clave solo deben tener 20 caracteres como maximo");
        return false;
    }
    if(telefono.length>10) {
        alert("El telefono es muy largo");
        return false;
    }
    if(isNaN(telefono)) {
        alert("el telefono ingresado no es un número ");
        return false;
    }
} */

const nombre = document.getElementById('Nombre');
const apellidos = document.getElementById('Apellidos');
const correo = document.getElementById('Correo');
const usuario = document.getElementById('Usuario');
const clave = document.getElementById('Clave');
const telefono = document.getElementById('Telefono');
const formulario = document.getElementById('formulario');

formulario.addEventListener('submit', event=>{
    event.preventDefault();
    let expresion = /\w+@\w+\.+[a-z]/;

    if(nombre.value.length == 0){
        let warnings = "";
        alert("El campo esta vacio nombre");
        // warnings += 'El campo esta vacio <br>';
    }
    console.log(expresion.test(correo.value));
    if(expresion.test(correo.value)){

    }
})