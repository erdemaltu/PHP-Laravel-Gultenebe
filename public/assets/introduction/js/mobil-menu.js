const btnOpenMenu = document.querySelector("#btn-menu");
const btnOpenMenuMobil = document.querySelector("#sidebar-menu");
const btnClosMenuMobil = document.querySelector("#close-sidebar");
const close1 = document.querySelector("#boxx1");
const close2 = document.querySelector("#boxx2")
const close3 = document.querySelector("#boxx3")
const close4 = document.querySelector("#boxx4")

btnOpenMenu.addEventListener("click", function(){

    btnOpenMenuMobil.style.right= "0";

});

btnClosMenuMobil.addEventListener("click", function(){

    btnOpenMenuMobil.style.right= "-100%"

});

close1.addEventListener("click", function() {

    btnOpenMenuMobil.style.right= "-100%"

});

close2.addEventListener("click", function() {

    btnOpenMenuMobil.style.right= "-100%"

});

close3.addEventListener("click", function() {

    btnOpenMenuMobil.style.right= "-100%"

});

close4.addEventListener("click", function() {

    btnOpenMenuMobil.style.right= "-100%"

});

document.addEventListener("click", function(event){

    if(

        !event.composedPath().includes(btnOpenMenuMobil) && !event.composedPath().includes(btnOpenMenu)

    ) {
        btnOpenMenuMobil.style.right = "-100%"
    }

});