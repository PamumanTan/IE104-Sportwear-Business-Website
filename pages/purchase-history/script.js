const rowPrices = document.querySelectorAll(".total-money");
console.log(rowPrices)
rowPrices.forEach((e) => {
    console.log(e.textContent)
    e.textContent = formatPrice(parseInt(e.textContent));
})