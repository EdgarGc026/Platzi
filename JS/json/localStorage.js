"use strict";

//Local Storage
// Comprobar disponibilidad del localStorage
if (typeof Storage !== "undefined") {
   console.log("LocalStorage disponible");
} else {
   console.log("LocalStorage no disponible");
}

// guardar datos
localStorage.setItem("title", " JSON Creado desde el localStorage");

// Deseamos recuperar
document.querySelector("#movies").innerHTML = localStorage.getItem("title");

// Guardar un objeto
var user = {
   name: "Edgar Ramon",
   email: "id@id.com",
   web: "edgargc026.com",
};
localStorage.setItem("user", JSON.stringify(user));

// Recuperar objecto

var userJSON = JSON.parse(localStorage.getItem("user"));
console.log(userJSON);
document
   .querySelector("#datas")
   .append(userJSON.name + " - " + userJSON.email + " - " + userJSON.web);

localStorage.clear();
