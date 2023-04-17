// Get Input Element
let filterInput = document.getElementById('filterInput');
// Add event listener
filterInput.addEventListener('keyup', filterSkills);
function filterSkills() {
    // Get Vaue of Input
    let filterValue = document.getElementById('filterInput').value.toUpperCase();
    // console.log(filterValue);
    // get names tbody
    let tbody = document.getElementById('fbody');
    // Get tds from tbody
    let td = tbody.querySelectorAll('td#fskills');
    // loop thrught all collection item tds
    for (let i = 0; i < td.length; i++) {
        // let a = td[i].getElementsByTagName('a')[0];
        // if match 
        if (td[i].innerHTML.toUpperCase().indexOf(filterValue) > -1) {
            td[i].parentElement.style.display = '';
        }
        else {
            td[i].parentElement.style.display = 'none';
        }
    }
}