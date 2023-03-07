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


// live search ajax desktop
document.addEventListener("DOMContentLoaded", function(event) {
    event.preventDefault();
    var searchInput = document.getElementById('search');
    var searchResults = document.getElementById('search-results');

    searchInput.addEventListener('keyup', function(event) {
        var query = searchInput.value;
        if (query.length >= 1) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/search?search=' + query, true);;
            xhr.onload = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var results = JSON.parse(xhr.responseText);
                    var output = '';
                    if (results.length == 0) {
                        output = '<p class="w-full h-max py-2 px-4 flex justify-center items-center text-sm text-center">Postingan tidak ditemukan</p>';
                    } else {
                        for (var i in results) {
                            var postSlug = encodeURIComponent(results[i].slug);
                            output += '<a href="/posts/' + postSlug + '" class="w-full h-max py-2 px-4 text-sm inline-block hover:bg-zinc-700">' + results[i].title + '</a>';
                        }
                    }
                    searchResults.innerHTML = output;
                }
            };
            xhr.send();
        } else {
            searchResults.innerHTML = '';
        }
    });
});

// matikan aksi default button search desktop
const buttonSearchDesktop = document.querySelector('.buttonSearchDesktop');
buttonSearchDesktop.addEventListener('click', function(event) {
    event.preventDefault();
});

// live search mobile
document.addEventListener("DOMContentLoaded", function(event) {
    var searchInputMobile = document.getElementById('search-mobile');
    var searchResultsMobile = document.getElementById('search-results-mobile');

    searchInputMobile.addEventListener('keyup', function(event) {
        var query = searchInputMobile.value;
        if (query.length >= 1) {
            var xhr = new XMLHttpRequest();
            xhr.open('GET', '/search?search=' + query, true);;
            xhr.onload = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var results = JSON.parse(xhr.responseText);
                    var output = '';
                    if (results.length == 0) {
                        output = '<p class="w-full h-full py-2 px-4 text-sm flex justify-center items-center">Postingan tidak ditemukan</p>';
                    } else {
                        for (var i in results) {
                            var postSlug = encodeURIComponent(results[i].slug);
                            output += '<a href="/posts/' + postSlug + '" class="w-full py-2 px-3 inline-block cursor-default hover:bg-zinc-800">' + results[i].title + '</a>';
                        }
                    }
                    searchResultsMobile.innerHTML = output;
                }
            };
            xhr.send();
        } else {
            searchResultsMobile.innerHTML = '';
        }
    });
});

// matikan aksi defult button search mobile
const buttonSearchMobile = document.querySelector('.buttonSearchMobile');
buttonSearchMobile.addEventListener('click', function(event) {
    event.preventDefault();
});
