

document.addEventListener('DOMContentLoaded', function(){
    eventListeners();

    DarkMode();
})


function DarkMode(){
    const BotonDrakMode = document.querySelector('.dark-mode-boton');

    BotonDrakMode.addEventListener('click', function(){
        document.body.classList.toggle('Dark-Mode');
        
    
    })
}

function eventListeners(){
    const MovilMenu = document.querySelector('.mobile-menu');

    MovilMenu.addEventListener('click', NavegacionResponsive);
}


function NavegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');

    navegacion.classList.toggle('mostrar')
}