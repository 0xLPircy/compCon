<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style2.css">
    <title>Participants</title>
</head>

<body>
    <h1>Student Details</h1>

    <form action="connect2.php" method="post" id="studentForm">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" required>

        <label for="year">Year</label>
        <input type="text" id="year" name="year" required>

        <label for="major">Major</label>
        <input type="text" id="major" name="major" required>

        <label for="skills">Skills</label>
        <textarea id="skills" name="skills" required></textarea>

        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>

        <label for="phone">Phone</label>
        <input type="text" id="phone" name="phone" required>

        <input type="submit" value="Add Student">
    </form>
    <input type="text" id="filterInput" placeholder="Search skills">
    <table id="studentTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Year</th>
                <th>Major</th>
                <th>Skills</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="fbody">

        </tbody>
    </table>
    <script src="main2.js"></script>
    <script src="filter.js"></script>
</body>

</html>