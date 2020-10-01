'use strict'

//arrays, arreglos, matriz, vectores

// var name = "Edgar";


// var numbers = [10,5,2,8,5,9,0];
// var bool = [true, true, false];
// var mix = ["Edgar", 26, true];

// console.log(names);
// console.log(numbers);
// console.log(bool);
// console.log(mix);

// var languages = new Array("PHP", "Java", "C++", "Javascript");
// console.log(languages[3]);

// var names = ["Edgar Ramon", "Juan Peraz", "Luis Alberto", "Andres Martinez"];
// var languages = new Array("PHP", "Java", "C++", "Javascript");

// document.write("<h1>Lenguajes de programacion de 2020</h1>");
// document.write("<ul>");
//     for(var i =0; i<languages.length; i++){
//         document.write('<li>' +languages[i]+ '</li>');        
//     }
// document.write("</ul>");
    // var element = parseInt(prompt("¿Que elemento deseas obtener?", 0));

// if(element >= names.length){
//     alert("Introduce un numero menor de: "+ " " +names.length)
// }else{
//     alert("El elemento obtenido es:" +names[element]);
// }


/* 
//foreach
var names = ["Edgar Ramon", "Juan Peraz", "Luis Alberto", "Andres Martinez"];
var languages = new Array("PHP", "Java", "C++", "Javascript");

document.write("<ul>");
    languages.forEach((elemento, index) => {
        document.write('<li>' +index+ ' . ' +elemento+ '</li>');  
    });
document.write("</ul>");

console.log(languages); */


//array multimensional

/* var category = ["Accion", "Aventura", "Comedia", "Musicales", "Terror"];
var movies = ["El padrino", "Pulp fiction", "Scary movie", "Sangre por sangre", "Saw"];
var cinepolis = [category, movies];


console.log(cinepolis[1][2]); */

/*var movies = ["El padrino", "Pulp fiction", "Scary movie", "Sangre por sangre", "Saw"];

var element = "";

 do{
    element = prompt("Ingresa alguna pelicula: ");
    movies.push(element);
}while (element != "FIN");
movies.pop(); */


var movies = ["El padrino", "Pulp fiction", "Scary movie", "Sangre por sangre", "Saw"];
movies.reverse();
console.log(movies);




/* var cadena = "texto1, texto2, texto3";
var cadenaArray = cadena.split(", ");

console.log(cadenaArray);
 */
/* var index = movies.indexOf("Sangre por sangre");

// var element = "";
var movie_string = movies.join();
console.log(movie_string);

if(index > -1){
    movies.splice(index, 1);
} */
