let VND = new Intl.NumberFormat('vi-VN', {
    style: 'currency',
    currency: 'VND',
});
const moneyData = document.querySelectorAll(".table-row #total-money");
moneyData.forEach((e) => {
    e.textContent = VND.format(e.textContent);
})