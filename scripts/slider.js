let slider = document.getElementById('square-range');
let value = document.getElementById('square-value');

value.innerHTML = slider.value;

slider.oninput = function() {
    value.innerHTML = this.value;
}

window.addEventListener('load', () => {
    const value = (slider.value-slider.min) / (slider.max-slider.min) * 100;
    slider.style.background = 'linear-gradient(to right, #BE69D5 ' + value + '%, #BAF1FF ' + value + '%)';
})

slider.addEventListener('input', () => {
    const value = (slider.value-slider.min) / (slider.max-slider.min) * 100;
    slider.style.background = 'linear-gradient(to right, #BE69D5 ' + value + '%, #BAF1FF ' + value + '%)';
})