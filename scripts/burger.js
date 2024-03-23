let burger = document.getElementById('burger');
let burgerButton = document.getElementById('button-burger');
let burgerButtonLine = document.getElementById('button-burger-line');

burgerButton.addEventListener('click', () => {
    if (burger.className != 'burger active-burger') {
        burger.classList.add('active-burger');
        burgerButtonLine.classList.add('active-button-burger-line');
    }
    else {
        burger.classList.remove('active-burger');
        burgerButtonLine.classList.remove('active-button-burger-line');
    }
})