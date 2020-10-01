'use strict'

//BOM Browser Object Model

function getBOM() {
    console.log(screen.height);
    console.log(screen.width);
    console.log(window.location.href);
}

function redirect(url) {
    window.location.href = url;
}

function openWindow(url) {
    window.open(url, "", "width=400, heidtg=400");
}


getBOM();