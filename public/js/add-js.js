// manampilkan form add
const addButton = document.querySelector('.addButton');
const alertAdd = document.querySelector('.alertAdd');
addButton.addEventListener('click', () => {
    alertAdd.style.display = 'flex';
});
// menutup form add
const cancelAdd = document.querySelector('.cancelAdd');
const formAddPost = document.querySelector('.formAddPost');
cancelAdd.addEventListener('click', () => {
    alertAdd.style.display = 'none';
    formAddPost.reset();
});

// berhasil tambah postingan 
const alertOkWith = document.querySelector('.alert-ok-with');
setTimeout(() => {
    alertOkWith.style.transform = 'translateY(180%)';
}, 5000);