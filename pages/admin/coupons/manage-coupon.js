/**
 * @type {HTMLButtonElement}
 */
const addCouponButton = document.querySelector('#add-coupon-button');
/**
 * @type {HTMLDivElement}
 */
const createModal = document.querySelector('.create-coupon-area');
/**
 * @type {HTMLButtonElement}
 */
const createAcceptBtn = document.querySelector('#create-accept-btn');
/**
 * @type {HTMLButtonElement}
 */
const createCancelBtn = document.querySelector('#create-cancel-btn');

/**
 * @type {HTMLDivElement}
 */
const detailModal = document.querySelector('.detail-coupon-area');
/**
 * @type {HTMLButtonElement}
 */
const detailAcceptBtn = document.querySelector('#detail-accept-btn');
/**
 * @type {HTMLButtonElement}
 */
const detailCancelBtn = document.querySelector('#detail-cancel-btn');

/** Create coupon */
addCouponButton.addEventListener('click', e => {
    e.preventDefault();
    // Open modal
    createModal.classList.remove('disable');
});

createAcceptBtn.addEventListener('click', e => {
    alert('Chức năng chưa được hỗ trợ');
});

createCancelBtn.addEventListener('click', e => {
    createModal.classList.add('disable');
});

/** BE cho biết sẽ chứa coupon data ở đâu? */

/** Detail coupon */
function openUpdateModal(id) {
    // Open modal
    detailModal.classList.remove('disable');
}

detailAcceptBtn.addEventListener('click', e => {
    alert('Chức năng chưa được hỗ trợ');
});

detailCancelBtn.addEventListener('click', e => {
    detailModal.classList.add('disable');
});

function deleteCoupon(id) {
    // Delete coupon
}

document.getElementById("coupon").style.color = "#013cc6";
