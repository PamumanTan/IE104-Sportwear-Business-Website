document.querySelector('.registerButton').addEventListener('click', function(event) {
    console.log("CLICK");
    const surname = document.querySelector('#surname').value;
    const name = document.querySelector('#name').value;
    const phonenumber = document.querySelector('#phoneNumber').value;
    const password = document.querySelector('#password').value;
    const verifyPassword = document.querySelector('#verify').value;


    var formdata = new FormData();
    formdata.append("surname", surname);
    formdata.append("name", name);
    formdata.append("phonenumber", phonenumber);
    formdata.append("password", password);
    formdata.append("verify", verifyPassword);

    var requestOptions = {
        method: 'POST',
        body: formdata
    };

    fetch("http://localhost/sportswear/controllers/register.php", requestOptions)
        .then(response => response.json())
        .then(data => {
            if (!data['error']) {
                window.location.href = "http://localhost/sportswear/pages/login";
            } else {
                showMessage(data['message']);
            }
        })
        .catch(error => showMessage(error));
});