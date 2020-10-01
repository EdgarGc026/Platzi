'use strict'

//plantilla texto

var name = prompt("Dame tu nombre");
var last = prompt("Apellidos");

// var text = "mi nombre es: " +name+ " " +last;

var text= `
    <h1>Hola que tal</h1>
    <h3>Mi nombre es: ${name}</h3
    <h3>Y mis apellidos son: ${last}</h3>
`;


document.write(text);