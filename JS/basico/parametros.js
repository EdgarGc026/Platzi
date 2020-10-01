'use strict'
/* 
//Parametros REST y SPREAD

function listFruits(fruit1, fruit2, ...moreFruits){
    console.log("Fruta 1:", fruit1);
    console.log("Fruta 2:", fruit2);
    console.log(moreFruits);
}

listFruits("Manzanas", "Sandia", "Pera", "Melon", "Coco");

var fruits = ["Platano", "Uvas"];

listFruits(...fruits, "Pera", "Melon", "Coco"); */

//funciones anonimas y callbacks

// var movie = function(name){
//     return "La pelicula es: " +name;
// }


/* 
//callback, es una funcion que se llama dentro de otra.
function sum(num1, num2, show, sumDoble) {
    var suma = num1 + num2;

    show(suma);
    sumDoble(suma);

    return suma;
}

sum(5,4, function(data){
    console.log("La suma es: ", data);
},
    function(data) {
        console.log("La suma por 2 es: ", (data*2));
    }
); */

//fechas
function sum(num1, num2, show, sumDoble) {
    var suma = num1 + num2;

    show(suma);
    sumDoble(suma);

    return suma;
}

//callaback con flechas
// Si necesitas 1 parametro, solo se pone asi. Si son 2 o mas de dos
//ahi si, va en parentesis.
 
sum(5,4, data =>{
    console.log("La suma es: ", data);
},
    data => {
        console.log("La suma por 2 es: ", (data*2));
    }
);