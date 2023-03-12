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