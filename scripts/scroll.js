let side = document.getElementById('side-container');

window.addEventListener('scroll', () => {
    document.body.style.setProperty('--scroll', window.scrollY);
})