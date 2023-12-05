document.querySelector('.loginButton').addEventListener('click', function(event) {
    const phonenumber = document.querySelector('#phoneNumber').value;
    const password = document.querySelector('#password').value;
    var formdata = new FormData();
    formdata.append("phonenumber", phonenumber);
    formdata.append("password", password);

    var requestOptions = {
        method: 'POST',
        body: formdata
    };

    fetch("http://localhost/sportswear/controllers/login.php", requestOptions)
        .then(response => response.json())
        .then(data => {
            if (!data['error']) {
                window.location.href = "http://localhost/sportswear/pages";
            } else {
                showMessage(data['message']);
            }
        })
        .catch(error => showMessage(error));

});