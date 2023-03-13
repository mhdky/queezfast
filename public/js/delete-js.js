// tampilkan alert delete
const btnDeletePos = document.querySelectorAll('.btnDeletePos');
const alertDelete = document.querySelectorAll('.alertDelete');
const calcelDelete = document.querySelectorAll('.calcelDelete');
for(let a = 0; a < btnDeletePos.length || a < alertDelete.length || a < calcelDelete.length; a++) {
    btnDeletePos[a].addEventListener('click', () => {
        alertDelete[a].style.display = 'flex';
    });
    calcelDelete[a].addEventListener('click', () => {
        alertDelete[a].style.display = 'none';
    });
}

// delete post
function deletePost(id) {
    const token = document.querySelector('input[name="_token"]').value;
    fetch('/post/' + id, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
    .then(response => {
        if (response.ok) {
            document.querySelector(`[data-post-id="${id}"]`).remove();
        } else {
            alert('Failed to delete post');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Failed to delete post');
    });
}

// delete social media
function deleteSocialMedia(id) {
    const token = document.querySelector('input[name="_token"]').value;
    fetch('/social-media/' + id, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
    .then(response => {
        if (response.ok) {
            document.querySelector(`[data-socailMedia-id="${id}"]`).remove();
        } else {
            alert('Failed to delete post');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Failed to delete post');
    });
}

// delete blog
function deleteBlog(id) {
    const token = document.querySelector('input[name="_token"]').value;
    fetch('/blog/' + id, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
    .then(response => {
        if (response.ok) {
            document.querySelector(`[data-blog-id="${id}"]`).remove();
        } else {
            alert('Failed to delete post');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Failed to delete post');
    });
}

// delete sponsor
function deleteSponsor(id) {
    const token = document.querySelector('input[name="_token"]').value;
    fetch('/sponsor/' + id, {
        method: 'DELETE',
        headers: {
            'X-CSRF-TOKEN': token
        }
    })
    .then(response => {
        if (response.ok) {
            document.querySelector(`[data-sponsor-id="${id}"]`).remove();
        } else {
            alert('Failed to delete post');
        }
    })
    .catch(error => {
        console.error(error);
        alert('Failed to delete post');
    });
}

// ketika button delete ditekan
const btnDelet = document.querySelectorAll('.btnDelete');
const alertOk = document.querySelector('.alert-ok');
btnDelet.forEach(deleteBtn => {
    deleteBtn.addEventListener('click', () => {
        alertDelete.forEach(containerAlertDelete => {
            containerAlertDelete.style.display = 'none';
        });
        alertOk.style.display = 'flex';
        alertOk.style.transform = 'translateY(0)';
        setTimeout(() => {
            alertOk.style.transform = 'translateY(100%)';
        }, 5000);
        setTimeout(() => {
            alertOk.style.display = 'none';
        }, 5500);
    });    
});