// jika tidak ada value maka tidak dapat melakukan pencarian pada dashbard
function checkInputSearchDashboard() {
    const inputSearchDashboard = document.querySelector('.inputSearchDashboard').value.replace(/\s/g,'');
    const btnSearchDashboard = document.querySelector('.btnSearchDashboard');
    if(inputSearchDashboard.length > 0) {
        btnSearchDashboard.disabled = false;
    } else {
        btnSearchDashboard.disabled = true;
    }
}

// dropdown admin
function buttonDropdownAdmin() {
    const arrowAdminDeropdown = document.querySelector('.arrowAdminDeropdown');
    const listDropdownAdmin = document.querySelector('.listDropdownAdmin');

    arrowAdminDeropdown.classList.toggle('arrowAdminDeropdownRotate');
    listDropdownAdmin.classList.toggle('listDropdownAdminShow');
}

