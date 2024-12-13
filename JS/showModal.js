const buyBtn = document.querySelector('.js-buy');
const modal = document.querySelector('.modal');
const modalContainer = document.querySelector('.js-modal-container');
const modalClose = document.querySelector('.modal-close');
function showBuy() {
    modal.classList.add('open');
}
function closeModal() {
    modal.classList.remove('open');
}
buyBtn.addEventListener('click', showBuy);
modalClose.addEventListener('click', closeModal);
modal.addEventListener('click', closeModal);
modalContainer.addEventListener('click', function (event) {
    event.stopPropagation();
})