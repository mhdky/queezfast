// edit post
const editBtns = document.querySelectorAll('.edit-btn');
editBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        document.body.style.overflow = 'hidden';
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


// edit social media
const editSocialMedia = document.querySelectorAll('.editSocialMedia');
editSocialMedia.forEach(btnEditSocialMedia => {
    btnEditSocialMedia.addEventListener('click', () => {
        document.body.style.overflow = 'hidden';
        document.querySelector('.alertEdit').style.display = 'flex';
        const id = btnEditSocialMedia.dataset.id;
        fetch(`/sjefjsdajq27/${id}`)
            .then(response => response.json())
            .then(socialMedia => {
                document.querySelector('.formEditSocialMedia').action = `/socialMedia/${socialMedia.id}`;
                document.getElementById('nameEdit').value = socialMedia.name;
                document.getElementById('urlEdit').value = socialMedia.url;
            });
    });
});

// edit blog
const editSocialMedia = document.querySelectorAll('.editSocialMedia');
editSocialMedia.forEach(btnEditSocialMedia => {
    btnEditSocialMedia.addEventListener('click', () => {
        document.body.style.overflow = 'hidden';
        document.querySelector('.alertEdit').style.display = 'flex';
        const id = btnEditSocialMedia.dataset.id;
        fetch(`/sjefjsdajq27/${id}`)
            .then(response => response.json())
            .then(socialMedia => {
                document.querySelector('.formEditSocialMedia').action = `/socialMedia/${socialMedia.id}`;
                document.getElementById('nameEdit').value = socialMedia.name;
                document.getElementById('urlEdit').value = socialMedia.url;
            });
    });
});


// batal edit 
const cancelEdit = document.querySelector('.cancelEdit');
const alertEdit = document.querySelector('.alertEdit');
cancelEdit.addEventListener('click', () => {
    alertEdit.style.display = 'none';
    document.body.style.overflow = 'auto';
});