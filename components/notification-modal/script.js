//Modal OrderButton
const openModalButton = document.querySelector(".add-to-cart");
const closeModalButton = document.getElementById("closeModalBtn");
const modal = document.querySelector(".modal");
const modalBackground = document.querySelector(".modal-background");
const modalContent = document.querySelector(".modal-content h2");

closeModalButton.addEventListener("click", function () {
    modal.classList.remove("active");
    modalBackground.classList.remove("active");
});

modalBackground.addEventListener("click", function () {
    modal.classList.remove("active");
    modalBackground.classList.remove("active");
});

function notify(message) {
    modalContent.innerHTML = message;
    modal.classList.add("active");
    modalBackground.classList.add("active")
}
