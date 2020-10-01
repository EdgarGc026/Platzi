// Para iniciar jQuery, tienes dos maneras
//La primera
$(function () {
   console.log("Esto ya esta cargado y funcionando");
   /* Selector por ID */

   let red = $("#red").css("background", "red").css("color", "white");
   console.log(red);

   let yellow = $("#yellow").css("background", "yellow").css("color", "green");
   console.log(yellow);

   $("#green").css("background", "green").css("color", "white");

   /* Selectores de clases */
   var myClass = $(".zebra").css("padding", "5px");

   $(".unborder").click(function () {
      console.log("Click dado");
      $(this).addClass("zebra");
   });

   /* Selectores de etiqueta */
   var parrafos = $("p").css("cursor", "pointer");
   parrafos.click(function () {
      let that = $(this);
      if (!that.hasClass("big")) {
         that.addClass("big");
      } else {
         that.removeClass("big");
      }
   });

   /* Selectores de atributos*/
   $('[title="Google"]').css("background", "#ccc");
   $('[title="Facebook"]').css("background", "blue");
   $('[title="Twitter"]').css("background", "red");
   $('[title="Youtube"]').css("background", "yellow");

   /* Find y parents */
   // $("p, a").addClass("marginTop");
   var search = $("#element2").parent().parent().find(".watch");

   console.log(search);
});

/* // La segunda
$(document).ready(function () {
   console.log("El segundo metodo tambien funciona");
});
 */
