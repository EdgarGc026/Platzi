'user strict'

/* 
    2 numeros y que diga cual es el mayor, menor y si son iguales
    Si  no son un num o son menores o iguales a 0, reintruducir los datos.


var num1 = parseInt(prompt("Introduce el primer numero", 0));
var num2 = parseInt(prompt("Introduce el segundo numero", 0));

while (num1 <= 0 || num2 <= 0 || isNaN(num1) ||isNaN(num2)) {
    num1 = parseInt(prompt("Introduce el primer numero", 0));
    num2 = parseInt(prompt("Introduce el segundo numero", 0));
}

if (num1 == num2) {
    alert("Los numeros son iguales");
}else if(num1 > num2){
    alert("El numero mayor es: " +num1);
    alert("El numero menor es: " +num2);
}else if(num2 > num1){
    alert("El numero mayor es: " +num2);
    alert("El numero menor es: " +num1);
}else{
    alert("Introduce numeros correctos");
}*/

/* 
    mediante u bucle mostrar la suma y la media de los numeros introducidos, 
    hasta introducir un num negaztivo y ahi mostrar el resultado
*/

var sum = 0;
var cont = 0;

do {
    var num = parseInt(prompt("Ingresa numeros hasta que metas un num negativo", 0));

    if (isNaN(num)) {
        num = 0;
    }else if(num >= 0){
        sum += num;

        cont++;
    }
    console.log(sum);
    console.log(cont);
} while (num >= 0);

alert("la suma de todos los numeros es: " +sum);
alert("La media es: " +(sum/cont));