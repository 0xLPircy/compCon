<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <title>Student Connect</title>
</head>

<body>
    <div class="container">
        <div class="showcase">
            <!-- <img src="bg.jpg" alt=""> -->
            <div class="showcaseContent">
                <h1 class="name">CompCon</h1>
                <div class="existingCompetition">
                    <h3>Existing Competition</h3>
                    <input type="text" placeholder="Enter Competition Code">
                </div>
                <div class="newLink">
                    <a href="#createNew">Create new competition</a>
                </div>
            </div>
        </div>
        <div id="createNew">
            <form action="connect.php" method="post" class="form">
                <h1>Create New Competition</h1>
                <div class="newLhs">
                    <!-- <div>
                        <label for="unique">generate id</label>
                        <input type="text" id="eid" name="eventid">
                    </div> -->
                    <div>
                        <label for="uni">Institute Name</label>
                        <input type="text" id="uni" name="uniName">
                    </div>
                    <div>
                        <label for="comp">Event Name</label>
                        <input type="text" id="comp" name="eventName">
                    </div>
                    <div>
                        <label for="size">Team Size</label>
                        <input type="Number" id="size" name="teamSize">
                    </div>
                    <div>
                        <button class="btn btn-submit">Create New Event</button>
                    </div>
                </div>
            </form>
            <div class="newRhs">
                <img src="img/newEvent.jpg" alt="">
            </div>
        </div>
        <footer>
            <div class="cameo">
                ......
            </div>
            <div class="footer footer-bottom text-center">

            Copyright &copy; 2023 TaveeshaRaghav CompCon
            
        </div>
        <div class="cameo">
                ......
            </div>
        </footer>
    </div>
</body>

</html>