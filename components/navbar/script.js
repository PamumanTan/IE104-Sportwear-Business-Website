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



const accountBtn = document.querySelector('#account');
const accountModal = document.querySelector('.modalAccount');
const body = document.querySelector('body');
const logoutBtn = document.querySelector('.modalDetailLogout');
const navbar = document.querySelector('.nav');

if (accountBtn) {
    // Set position for account modal
    accountModal.style.top = navbar.offsetHeight + 'px';
    function toggleAccountModal() {
        accountModal.classList.toggle('open');
    }

    function hideAccountModal() {
        accountModal.classList.remove('open');
    }

    accountBtn.onclick = e => {
        e.stopPropagation();
        toggleAccountModal();
    }
    accountModal.onclick = e => {
        e.stopPropagation();
    }
    body.onclick = hideAccountModal;

    logoutBtn.onclick = e => {
        fetch('http://localhost/sportswear/controllers/logout.php', {
            method: 'POST'

        })
            .then(res => res.json())
            .then(data => {
                if (!data.error) {
                    window.location.href = "http://localhost/sportswear/";
                } else {
                    alert(data.message);
                }
            })
    }
}

// Hide login and signup when hover input search
// const search = document.querySelector('.navSearchContent');
// const loginBtn = document.querySelector('.login');
// const signupBtn = document.querySelector('.signup');

// search.onmouseover = e => {
//     loginBtn.style.display = 'none';
//     signupBtn.style.display = 'none';
// }
// search.onmouseout = e => {
//     loginBtn.style.display = 'inline-block';
//     signupBtn.style.display = 'inline-block';
// }

// update cart number
getCartNumber();