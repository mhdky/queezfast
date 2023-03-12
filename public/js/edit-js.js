// edit post
const editBtns = document.querySelectorAll('.edit-btn');
editBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        document.querySelector('.alertEdit').style.display = 'flex';
        const id = btn.dataset.id;
        fetch(`/akfsdqoiwj12/${id}`)
            .then(response => response.json())
            .then(post => {
                document.querySelector('.formEditPost').action = `/post/${post.id}`;
                document.getElementById('categoryIdEdit').value = post.category_id;
                document.getElementById('githubEdit').value = post.github;
                document.getElementById('authorEdit').value = post.author;
                document.getElementById('dateEdit').value = post.date;
                document.getElementById('titleEdit').value = post.title;
                document.getElementById('slugEdit').value = post.slug;
                document.getElementById('excerptEdit').value = post.excerpt;
            });
    });
});


// batal edit 
const cancelEdit = document.querySelector('.cancelEdit');
const alertEdit = document.querySelector('.alertEdit');
cancelEdit.addEventListener('click', () => {
    alertEdit.style.display = 'none';
});