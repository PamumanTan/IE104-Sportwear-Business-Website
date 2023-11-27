const colorPicker = document.getElementById('color');
const colorInput = document.getElementById('productColor');

colorPicker.addEventListener('change', (event) => {
    if (colorInput.value == '' || colorInput.value == null)
        colorInput.value = event.target.value;
    else {
        colorInput.value += ',';
        colorInput.value += event.target.value;
    }
});

