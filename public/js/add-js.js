// manampilkan form add
const addButton = document.querySelector('.addButton');
const alertAdd = document.querySelector('.alertAdd');
addButton.addEventListener('click', () => {
    alertAdd.style.display = 'flex';
});
// menutup form add
const cancelAdd = document.querySelector('.cancelAdd');
cancelAdd.addEventListener('click', () => {
    alertAdd.style.display = 'none';
});
