document.addEventListener('DOMContentLoaded', function(){
    eventListeners();
})

function eventListeners(){
    const MovilMenu = document.querySelector('.mobile-menu');

    MovilMenu.addEventListener('click', NavegacionResponsive);
}


function NavegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')
}