function showMessage(message) {
    var x = document.getElementById("snackbar");
    x.innerHTML = message;
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

let VND = new Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
});

function formatPrice(price) {
    return VND.format(price);
}


function parsePrice(formattedPrice) {
    // Remove non-numeric characters and parse the string to a float
    const numericValue = parseFloat(formattedPrice.replace(/[^\d.,]/g, '').replace(',', '.'));

    // Check if the parsed value is a valid number
    if (!isNaN(numericValue)) {
        return numericValue;
    } else {
        throw new Error('Invalid formatted price');
    }
}