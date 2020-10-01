"user strict";

window.addEventListener("load", () => {
   var loginForm = document.querySelector("#loginForm");
   var boxDashed = document.querySelector(".dashed");
   boxDashed.style.display = "none";

   //evento submit
   loginForm.addEventListener("submit", function () {
      console.log("Evento Submit capturado");

      var name = document.querySelector("#name").value;
      var lastName = document.querySelector("#lastName").value;
      var age = parseInt(document.querySelector("#age").value);

      //TODO:Validando el nombre
      if (name.trim() == null || name.trim().length == 0) {
         // alert("El nombre no es valido");
         document.querySelector("#errorName").innerHTML =
            "El nombre no es valido <br />";

         return false;
      } else {
         document.querySelector("#errorName").style.display = "none";
      }
      if (lastName.trim() == null || lastName.trim().length == 0) {
         // alert("Los apellidos no son validos");
         document.querySelector("#errorLastName").innerHTML =
            "Los apellidos no son validos <br />";
         return false;
      } else {
         document.querySelector("#errorLastName").style.display = "none";
      }

      if (age == null || age <= 0 || isNaN(age)) {
         // alert("La edad no es valida");
         document.querySelector("#errorAge").innerHTML =
            "La edad no es valida <br />";
         return false;
      } else {
         document.querySelector("#errorAge").style.display = "none";
      }
      boxDashed.style.display = "block";

      var pName = document.querySelector("#pName span");
      var pLastName = document.querySelector("#pLastName span");
      var pAge = document.querySelector("#pAge span");

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
