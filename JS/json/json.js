"use strict";
// JSON Javascript Object Notation

var movie = {
   title: "Super Sentai",
   year: "2000",
   country: "Japan",
};

var movies = [
   { title: "Justice League", year: "2017", country: "United Stated" },
   { title: "Boku no Hero: The movie", year: "2019", country: "Japan" },
   movie,
];

var box_movies = document.querySelector("#movies");
let index;
for (index in movies) {
   let p = document.createElement("p");
   p.append(
      " [ " +
         movies[index].title +
         " - " +
         movies[index].year +
         " - " +
         movies[index].country +
         " ] "
   );
   box_movies.append(p);
}
