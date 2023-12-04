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

// update cart number
getCartNumber();

// update account modal information
if (accountModal) {
    fetch('http://localhost/sportswear/controllers/me.php')
        .then(res => res.json())
        .then(res => {
            if (!res.error) {
                const username = res['data']['username'];
                const avatar = res['data']['avatar'];

                const accountUsername = document.querySelector('.modalInfo h2');
                const accountImage = document.querySelector('.modalInfo img');

                accountUsername.innerHTML = username;
                accountImage.src = avatar;
            } else {
                alert(data.message);
            }
        })
}