const submitBtn = document.getElementById('save');
const editBtn = document.getElementById('edit');
const textEditor = document.querySelectorAll('.text-content');
textEditor.forEach(element => {
    element.addEventListener('keypress', () => {
        submitBtn.style.display = "block";
    });
});

editBtn.addEventListener('click', () => {
    textEditor.forEach(element => {
        element.removeAttribute("disabled");
    })
})