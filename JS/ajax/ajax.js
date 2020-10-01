"use strict";

// Fetch (ajax) y peticiones a servicios / api rest
var users_div = document.querySelector("#userList");
var teacher_div = document.querySelector("#teacher");
var leanner_div = document.querySelector("#Leanner");
fetch("https://jsonplaceholder.typicode.com/users")
   .then((data) => data.json())
   .then((users) => {
      listUsers(users);
      return getInfo();
   })
   .then((data) => {
      teacher_div.innerHTML = data;
      return getLeanner();
   })
   .then((data) => data.json())
   .then((user) => {
      showLeanner(user);
   })
   .catch((error) => {
      alert("Error en las peticiones");
   });

function getUsers() {
   return fetch("https://jsonplaceholder.typicode.com/users");
}

function listUsers(users) {
   users.map((user, i) => {
      let name = document.createElement("h3");
      name.innerHTML = "[ " + i + " ] " + user.name;
      users_div.appendChild(name);
      document.querySelector(".loading").style.display = "none";
   });
}

function getInfo() {
   var teacher = {
      name: "Jorge",
      lastname: "Perez",
      url: "jorgeperez.org",
   };

   return new Promise((resolve, reject) => {
      var teacher_string = "";

      setTimeout(() => {
         teacher_string = JSON.stringify(teacher);

         if (typeof teacher_string != "string" || teacher_string == "")
            return reject("Si falla, es porque no esta en string");
         return resolve(teacher_string);
      }, 3000);
   });
}

function getLeanner() {
   return fetch("https://jsonplaceholder.typicode.com/users/1");
}

function showLeanner(user) {
   console.log(user);
   let name = document.createElement("h4");
   // let avatar = document.createElement('img');

   name.innerHTML = user.name + " - " + user.username + " - " + user.email;
   /*     avatar.src = user.avatar;
    avatar.width = '100px';
    avatar.height = '100px'; */

   leanner_div.appendChild(name);
   // leanner_div.appendChild(avatar);
   document.querySelector("#Leanner .loading").style.display = "none";
}
