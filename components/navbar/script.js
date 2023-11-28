const searchInput = document.querySelector('#search-input');
const searchBtn = document.querySelector('.navSearchIcon');

searchInput.addEventListener('keydown', (e) => {
    if (e.keyCode == 13) {
        window.location.href = `http://localhost/sportswear/pages/search/?keyword=${e.target.value}`;
    }
});
searchBtn.onclick = (e) => {
    window.location.href = `http://localhost/sportswear/pages/search/?keyword=${searchInput.value}`;
};

// const navItem = document.querySelectorAll('.nav-subnav-item');
// // get next element of navbar 
// const navbar = document.querySelector('.nav');
// const nextToNav = navbar.nextElementSibling;
// console.log(nextToNav)

// console.log(navItem);
// navItem.forEach((item) => {
//     item.onmouseover = (e) => {
//         nextToNav.classList.add('blur');
//     }
//     item.onmouseout = (e) => {
//         nextToNav.classList.remove('blur');
//     }
// })

console.log('hello');

const accountBtn = document.querySelector('#account');
const accountModal = document.querySelector('.modalAccount');
const body = document.querySelector('body');

function toggleAccountModal() {
    accountModal.classList.toggle('open');
}

accountBtn.onclick = e => {
    e.stopPropagation();
    toggleAccountModal();
}
accountModal.onclick = e => {
    e.stopPropagation();
}
body.onclick = toggleAccountModal;