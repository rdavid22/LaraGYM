// Hamburgir animation :?)

var burgir = document.getElementById("burgir");
var icon1 = document.getElementById("a");
var icon2 = document.getElementById("b");
var icon3 = document.getElementById("c");

burgir.addEventListener('click', function () {
    icon1.classList.toggle('a');
    icon3.classList.toggle('b');
    icon2.classList.toggle('c');
});