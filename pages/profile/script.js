const submitBtn = document.getElementById('save');
const textEditor = document.querySelectorAll('.text-content');
textEditor.forEach(element => {
    element.addEventListener('keypress', () => {
        submitBtn.style.display = "block";
    });
});

