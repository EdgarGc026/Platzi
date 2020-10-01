'user strict';

window.addEventListener('load', () =>{
    var loginForm = document.querySelector("#loginForm");
    var boxDashed = document.querySelector(".dashed");
        boxDashed.style.display = "none";
    
    //evento submit
    loginForm.addEventListener('submit', function(){
        console.log("Evento Submit capturado");


        var name = document.querySelector("#name").value;
        var lastName = document.querySelector("#lastName").value;
        var age = document.querySelector("#age").value;
        boxDashed.style.display = "block";
        
        var pName = document.querySelector('#pName span');
        var pLastName = document.querySelector('#pLastName span');
        var pAge = document.querySelector('#pAge span');

        pName.innerHTML = name;
        pLastName.innerHTML = lastName;
        pAge.innerHTML = age;

        /* var userData = [name, lastName, age];
        var index;
        for(index in userData){
            var parrafo = document.createElement('p');
                parrafo.append(userData[index]);
            boxDashed.append(parrafo);
        } */
    });

});