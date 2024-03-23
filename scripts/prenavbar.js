let menuNavbar = document.getElementById('menu-navbar');
let menuPreNavbar = document.getElementById('menu-prenavbar');
let buttonCloseMenuPreNavbar = document.getElementById('menu-prenavbar-close-button');

menuNavbar.addEventListener('click', () => {
    menuPreNavbar.classList.add('active-prenavbar');
})

buttonCloseMenuPreNavbar.addEventListener('click', () => {
    menuPreNavbar.classList.remove('active-prenavbar');
})

