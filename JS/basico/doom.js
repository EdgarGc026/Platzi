'use strict'
//Doom Document Object Model

// function changeColor(color) {
//     box.style.background = color;
// }

// // var box = document.getElementById('box');
// var box = document.querySelector("#box");
//     box.innerHTML="Te hablo desde JS";
//     box.style.background = "red";
//     box.className = "prueba btn";
    

// console.log(box);

//TODO:Conseguir sin id y por tag
 var tag = document.getElementsByTagName('div');

var section = document.querySelector("#mainSection");    
var hr = document.createElement("hr");
    
var value;
for(value in tag){
    if(typeof tag[value].textContent == 'string'){
        var parrafo = document.createElement('p');
        var texto = document.createTextNode(tag[value].textContent);
        parrafo.append(texto);
        
    }
}
section.append(hr);

//elementos por su clase
var divReds = document.getElementsByClassName("red");
var divYellow = document.getElementsByClassName("yellow");
divYellow[0].style.background = "yellow";

var div;
for(div in divReds){ 
    if(divReds[div].className == "red"){
        divReds[div].style.background = "red";
        
    }
    
}
    
console.log(divReds); 

var id = document.querySelector("#main");
console.log(id);

var claseRojo = document.querySelector("div.red");

var etiqueta = document.querySelector("div");
console.log(id);