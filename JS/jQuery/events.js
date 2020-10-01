$(function () {
   console.log("Eventos cargados con exito");

   /* MouseOver y MouseOut */
   var box = $("#box");
   /*    box.mouseover(function () {
      $(this).css("background", "red");
   });
   box.mouseout(function () {
      $(this).css("background", "green");
   }); */

   /* Evento Over simplificada */

   function changeRed() {
      $(this).css("background", "red");
   }

   function changeGreen() {
      $(this).css("background", "green");
   }
   box.hover(changeRed, changeGreen);

   /* Click, Double Click */
   box.click(function () {
      $(this).css("background", "blue").css("color", "white");
   });

   box.dblclick(function () {
      $(this).css("background", "pink").css("color", "yellow");
   });

   /* Focus and Blur */
});
