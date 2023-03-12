// menampilkan list mobile
const burgerBtn = document.querySelector('.burgerBtn');
const containerListMobile = document.querySelector('.containerListMobile');
burgerBtn.addEventListener('click', () => {
    containerListMobile.style.display = 'block';
});

// menutup list mobile
const closeNavMobile = document.querySelector('.closeNavMobile');
closeNavMobile.addEventListener('click', () => {
    containerListMobile.style.display = 'none';
});

// membuka search mobile
const searchBtn = document.querySelector('.searchBtn');
const containersearch = document.querySelector('.containersearch');
searchBtn.addEventListener('click', () => {
    containersearch.style.display = 'block';
});

// menutup search mobile
const closeSearch = document.querySelector('.closeSearch');
const inputSearch = document.querySelector('.inputSearch');
const containerHasilPencarianMobile = document.querySelector('.containerHasilPencarianMobile');
closeSearch.addEventListener('click', () => {
    containersearch.style.display = 'none';
    inputSearch.value = '';
    containerHasilPencarianMobile.style.display = 'none';
});

// menampilkan container hasil pencarian bila ada value
function checkInputSearchMobile() {
    const inputSearch = document.querySelector('.inputSearch').value.replace(/\s/g,'');
    const containerHasilPencarianMobile = document.querySelector('.containerHasilPencarianMobile');

    if(inputSearch.length > 0) {
        containerHasilPencarianMobile.style.display = 'block';
    } else {
        containerHasilPencarianMobile.style.display = 'none'
    }
}

// category dropdown
const categoryDesktop = document.querySelector('.categoryDesktop');
const arrowCategoryDesktop = document.querySelector('.arrowCategoryDesktop');
const listCategoryDropdown = document.querySelector('.listCategoryDropdown');
categoryDesktop.addEventListener('click', () => {
    arrowCategoryDesktop.classList.toggle('arrowCategoryDesktopRotate');
    listCategoryDropdown.classList.toggle('listCategoryDropdownShow');
});

// close hasil pencarian desktop
const closeListHasilPencarian = document.querySelector('.closeContainerListHasilPencarian');
const hasilPencarianDesktop = document.querySelector('.containerHasilPencarianDesktop');
const inputSerchDesktop = document.querySelector('.inputSerchDesktop');
closeListHasilPencarian.addEventListener('click', () => {
    hasilPencarianDesktop.style.display = 'none';
    inputSerchDesktop.value = '';
});


// validasi jika ada data yang diinputkan maka container hasil pencarian block jika tidak maka none
function checkInputDesktop() {
    const hasilPencarianDeasktop = document.querySelector('.containerHasilPencarianDesktop');
    const searchDesktop = document.querySelector('.searchDesktop').value.replace(/\s/g,'');
    
    if(searchDesktop.length > 0) {
        hasilPencarianDeasktop.style.display = 'flex';
    } else {
        hasilPencarianDeasktop.style.display = 'none';
    }
}



// matikan aksi default button search desktop
const buttonSearchDesktop = document.querySelector('.buttonSearchDesktop');
buttonSearchDesktop.addEventListener('click', function(event) {
    event.preventDefault();
});

// matikan aksi defult button search mobile
const buttonSearchMobile = document.querySelector('.buttonSearchMobile');
buttonSearchMobile.addEventListener('click', function(event) {
    event.preventDefault();
});

// new live search desktop
const searchInput = document.querySelector('.searchInput');
const searchResult = document.querySelector('#searchResult');
const loading = document.querySelector('.loading');

searchInput.addEventListener('keyup', (e) => {
    const searchText = e.target.value.trim();

    if (searchText.length > 0) {
        // Tampilkan loading
        loading.style.display = 'block';

        fetch(`/sdjfqiaaweq112/${searchText}`)
            .then(response => response.json())
            .then(data => {
                // Sembunyikan loading
                loading.style.display = 'none';

                searchResult.innerHTML = '';

                if (data.length === 0) {
                    // Jika data tidak ditemukan, tampilkan pesan
                    const notFound = document.createElement('div');
                    notFound.classList.add('noPost', 'w-full', 'h-max', 'py-2', 'px-4', 'flex', 'justify-center', 'items-center', 'text-sm', 'text-center');
                    notFound.textContent = 'Postingan tidak ditemukan';
                    searchResult.appendChild(notFound);
                } else {
                    data.forEach(post => {
                        // jika data ditemukan
                        const link = document.createElement('a');
                        link.href = `${post.slug}`;
                        link.classList.add('w-full', 'h-max', 'py-2', 'px-4', 'text-sm', 'inline-block', 'hover:bg-zinc-700');
                        link.textContent = post.title;

                        searchResult.appendChild(link);
                    });
                }
            })
            .catch(error => console.log(error));
    } else {
        loading.style.display = 'none';
        searchResult.innerHTML = '';
    }
});





// new live search mobile
const searchInputMobile = document.querySelector('.searchInputMobile');
const searchResultMobile = document.querySelector('.searchResultMobile');
const loadingMobile = document.querySelector('.loadingMobile');

searchInputMobile.addEventListener('keyup', (e) => {
    const searchText = e.target.value.trim();

    if (searchText.length > 0) {
        // Tampilkan loadingMobile
        loadingMobile.style.display = 'block';

        fetch(`/sdjfqiaaweq112/${searchText}`)
            .then(response => response.json())
            .then(data => {
                // Sembunyikan loadingMobile
                loadingMobile.style.display = 'none';

                searchResultMobile.innerHTML = '';

                if (data.length === 0) {
                    // Jika data tidak ditemukan, tampilkan pesan
                    const notFound = document.createElement('div');
                    notFound.classList.add('noPost', 'w-full', 'h-max', 'py-2', 'px-4', 'flex', 'justify-center', 'items-center', 'text-sm', 'text-center');
                    notFound.textContent = 'Postingan tidak ditemukan';
                    searchResultMobile.appendChild(notFound);
                } else {
                    data.forEach(post => {
                        // jika data ditemukan
                        const link = document.createElement('a');
                        link.href = `${post.slug}`;
                        link.classList.add('w-full', 'py-2', 'px-3', 'inline-block', 'cursor-default',  'hover:bg-zinc-800');
                        link.textContent = post.title;

                        searchResultMobile.appendChild(link);
                    });
                }
            })
            .catch(error => console.log(error));
    } else {
        loadingMobile.style.display = 'none';
        searchResult.innerHTML = '';
    }
});