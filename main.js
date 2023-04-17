document.getElementById('myForm').addEventListener('submit', newEvent);

console.log("hi");

var id = 0;

function newEvent(e) {
    //prevent from submitting
    e.preventDefault();

    // get values
    var uniName = document.getElementById('uni').value;
    var eventName = document.getElementById('comp').value;
    var teamSize = document.getElementById('size').value;

    // validate form


    //fetch id 
    id = id + 1;

    // values in an object 
    var event = {
        EID: id,
        uni: uniName,
        event: eventName,
        size: teamSize
    }

    if (localStorage.getItem('events') === null) {
        // Init array
        var events = [];
        // add event obkject to array
        events.push(event);
        // set to local storage
        localStorage.setItem('events', JSON.stringify(events));
    }
    else {
        // get events from local storage
        var events = JSON.parse(localStorage.getItem('events'));
        // add event toi array
        events.push(event);
        // Re-set to local xstorage
        localStorage.setItem('events', JSON.stringify(events));
    }



    // clear form
    document.getElementById('myForm').reset();


}

