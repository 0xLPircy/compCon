<!DOCTYPE html>
<html>
 
<head>
    <title>Connect Page page</title>
</head>

<body>
    <center>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "compCon");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $uniName =  $_REQUEST['uniName'];
        $eventName = $_REQUEST['eventName'];
        $teamSize =  $_REQUEST['teamSize'];
        // $address = $_REQUEST['address'];
        // $email = $_REQUEST['email'];
         
        // Performing insert query execution
        // here our table name is Events
        $sql = "INSERT INTO Events VALUES ('$uniName','$eventName','$teamSize')";
         
        if(mysqli_query($conn, $sql)){
            header("Location: participants.php");
            exit();
        }

        // if(mysqli_query($conn, $sql)){
            // echo "<h3>data stored in a database successfully."
            //     . " Please browse your localhost php my admin"
            //     . " to view the updated data</h3>";
 
            // echo nl2br("\n$uniName\n $eventName\n "
            //     . "$teamSize");
        // } else{
        //     echo "ERROR: Hush! Sorry $sql. "
        //         . mysqli_error($conn);
        // }
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>