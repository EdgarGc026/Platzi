'use strict'

//funciones

function printConsole(num1, num2) {
    console.log("Suma: " +(num1 + num2));
    console.log("Resta: " +(num1 - num2));
    console.log("Multiplicacion: " +(num1 * num2));    
    console.log("Division: " +(num1 / num2)); 
}

function printPage(num1, num2) {
        document.write("Suma: " +(num1 + num2) +"<br/>");
        document.write("Resta: " +(num1 - num2) +"<br/>");
        document.write("Multiplicacion: " +(num1 * num2) +"<br/>");    
        document.write("Division: " +(num1 / num2) +"<br/>"); 
}

function calculator(num1, num2, show = false) {
    if(show == false){
       printConsole(num1, num2);
    }else{
        printPage(num1, num2);
    }
    return "Esto si funciona (?)";
}

//Invocar la funcion
calculator(10,10);
calculator(7,3, true);

