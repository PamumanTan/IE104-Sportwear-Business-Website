// chưa có openModalButton
const closeModalButton = document.getElementById("closeModalBtn");
const modal = document.querySelector(".modal");
const modalBackground = document.querySelector(".modal-background");
openModalButton.addEventListener("click", function () {
    modal.classList.add("active");
    modalBackground.classList.add("active");
});

closeModalButton.addEventListener("click", function () {
    modal.classList.remove("active");
    modalBackground.classList.remove("active");
});
modalBackground.addEventListener("click", function () {
    modal.classList.remove("active");
    modalBackground.classList.remove("active");
});
