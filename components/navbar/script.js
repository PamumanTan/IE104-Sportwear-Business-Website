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