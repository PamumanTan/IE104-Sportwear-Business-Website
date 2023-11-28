/**
 * @type {HTMLDivElement}
 */
const reportModal = document.querySelector('.detail-report-area');
const exportBtn = document.querySelector('.report-modal__export-btn');
const exitBtn = document.querySelector('.report-modal__exit-btn');

function openDetailModal(id) {
    reportModal.classList.remove('disable');
}

function handlePrint() {
    alert('Chức năng chưa được hỗ trợ');
}

exportBtn.addEventListener('click', () => {
    alert('Chức năng chưa được hỗ trợ');
})

exitBtn.addEventListener('click', () => {
    reportModal.classList.add('disable');
})