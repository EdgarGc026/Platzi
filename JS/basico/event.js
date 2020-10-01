"use strict";

//eventos del mouse
/* click a algo
    si pasa algun lado
*/

window.addEventListener("load", () => {
   function changeColor() {
      console.log("me has dado click");
      let bg = button.style.background;
      if (bg == "blue") {
         button.style.background = "red";
      } else {
         button.style.background = "blue";
         button.style.padding = "10px";
         button.style.background = "1px solid #ccc";
      }
      return true;
   }

   //evento click
   var button = document.querySelector("#button");
   button.addEventListener("click", function () {
      changeColor();
      console.log(this);
      this.style.boder = "10px solid black";
   });

   //evento mouseover
   button.addEventListener("mouseover", function () {
      button.style.background = "yellow";
   });

   //evento mouseout
   button.addEventListener("mouseout", function () {
      button.style.background = "#ccc";
   });

   //focus
   var input = document.querySelector("#name");
   input.addEventListener("focus", function () {
      console.log("[focus] Estas haciendo focus dentro del input");
   });

   //Blur
   input.addEventListener("blur", function () {
      console.log("[blur] Estas fuera del focus input");
   });

   //KeyDown
   input.addEventListener("keydown", function (event) {
      console.log(
         "[keydown] Estas pulsando esta tecla: " +
            String.fromCharCode(event.keyCode)
      );
   });

   // keypress
   input.addEventListener("keypress", function (event) {
      console.log(
         "[keypress] Tecla presionada; " + String.fromCharCode(event.keyCode)
      );
   });

   // keypup
   input.addEventListener("keyup", function (event) {
      console.log(
         "[keyup] Tecla soltada; " + String.fromCharCode(event.keyCode)
      );
   });
}); //endload
