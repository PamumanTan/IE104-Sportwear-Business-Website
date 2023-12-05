document.getElementById("product").style.color = "#013cc6";

let deleteButtonList = document.getElementsByClassName('delete-btn');
for (let i = 0; i < deleteButtonList.length; ++i) {
    deleteButtonList[i].addEventListener('click', function (e) {
        e.preventDefault();
        let confirmDelete = confirm('Bạn có chắc chắn muốn xóa sản phẩm này không?');
        if (confirmDelete) {
            window.location.href = this.href;
        }
    })
}