document.getElementById('studentForm').addEventListener('submit', newStudent);

fetchStudents();

// function to add a student
function newStudent(e) {
    // e.preventDefault();

    // get the input values
    var name = document.getElementById('name').value;
    var year = document.getElementById('year').value;
    var major = document.getElementById('major').value;
    var skills = document.getElementById('skills').value;
    var email = document.getElementById('email').value;
    var phone = document.getElementById('phone').value;

    // create a new student object
    var student = {
        id: Math.trunc((Date.now() % 10000000) / 1000),
        p_name: name,
        p_year: year,
        p_major: major,
        p_skills: skills,
        p_email: email,
        p_phone: phone
    }

    if (localStorage.getItem('students') === null) {
        // Init array
        var students = [];
        // add student obkject to array
        students.push(student);
        // set to local storage
        localStorage.setItem('students', JSON.stringify(students));
    }
    else {
        // get students from local storage
        var students = JSON.parse(localStorage.getItem('students'));
        // add student toi array
        students.push(student);
        // Re-set to local xstorage
        localStorage.setItem('students', JSON.stringify(students));
    }

    // clear form
    document.getElementById('studentForm').reset();

    // re fetch students (deletes from the screen)
    fetchStudents();
}

function deleteStudent(pid) {
    console.log(pid);
    // Get students from local storage
    var students = JSON.parse(localStorage.getItem('students'));
    // loopp through above
    for (var i = 0; i < students.length; i++) {
        if (students[i].id == pid) {
            // remove from array
            students.splice(i, 1); //NEW~NEW~NEW~NEW~NEW~
        }
    }
    // re set the local storage
    localStorage.setItem('students', JSON.stringify(students));

    // re fetch bookmakrs (deletes from the screen)
    fetchStudents();
}

// Fetch students
function fetchStudents() {
    // get students from local storage
    var students = JSON.parse(localStorage.getItem('students'));
    console.log(students);

    // get output ki ID
    var studentsresults = document.querySelector('tbody');
    console.log(students.length);

    // build output
    studentsresults.innerHTML = '';
    for (var i = 0; i < students.length; i++) {
        var pid = students[i].id;
        var name = students[i].p_name;
        var year = students[i].p_year;
        var major = students[i].p_major;
        var skills = students[i].p_skills;
        var email = students[i].p_email;
        var phone = students[i].p_phone;
        studentsresults.innerHTML += '<tr>' +
            '<td>' + pid + '</td>' +
            '<td>' + name + '</td>' +
            '<td>' + year + '</td>' +
            '<td>' + major + '</td>' +
            '<td id="fskills">' + skills + '</td>' +
            '<td>' + email + '</td>' +
            '<td>' + phone + '</td>' +
            '<td><a onclick="deleteStudent(\'' + pid + '\')" class = "btn btn-danger" href="#">Delete</a> </td> </tr>';
    }
}


// function validateForm(siteName, siteUrl) {
//     if (!siteName || !siteUrl) {
//         alert('Please fill in form');
//         return false;
//     }
//     var expression = /[-a-zA-Z0-9@:%._\+~#=]{1,256}\.[a-zA-Z0-9()]{1,6}\b([-a-zA-Z0-9()@:%_\+.~#?&//=]*)?/gi;
//     var regex = new RegExp(expression);
//     if (!siteUrl.match(regex)) {
//         alert("Enter valid URL");
//         return false;
//     }

//     return true;
// }
