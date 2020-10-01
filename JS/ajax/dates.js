var date = new Date();
var year = date.getFullYear();
var month = date.getMonth();
var day = date.getDate();
var hour = date.getHours();
var minute = date.getMinutes();
var second = date.getSeconds();

var hour_text = `
    El año es: ${year}
    El mes es: ${month}
    El dia es: ${day}
    La hora es: ${hour}
    El minuto es: ${minute}
    El segundo es: ${second}
`;
console.log(hour_text);
console.log(Math.ceil(Math.random() * 100));
