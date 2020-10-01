'user strict'

window.addEventListener('load', function(){


    //timer

    function interval() {
        var time = setInterval(function(){
            console.log("Set interval ejecutado");
            var header = document.querySelector('h1');
            if (header.style.fontSize == "50px") {
                header.style.fontSize = "20px";
            }else{
                header.style.fontSize = "50px"; 
            }
        }, 1000);
        return time;
    }

    var time = interval();

    //setInterval
    var bntStop = document.querySelector("#button");
    bntStop.addEventListener('click', () =>{
        alert("Se ha detenido :)");
        clearInterval(time);
    });


    var btnStart = document.querySelector("#cmon");
    btnStart.addEventListener('click', () =>{
        interval();
        alert("Sigue adelante :)");
        
    });

 /* //setTimeOut solo se ejecuta 1 vez
var time = setTimeout(function(){
    console.log("Set interval ejecutado");
    var header = document.querySelector('h1');
    if (header.style.fontSize == "50px") {
        header.style.fontSize = "20px";
    }else{
        header.style.fontSize = "50px"; 
    }
}, 1000) */


});