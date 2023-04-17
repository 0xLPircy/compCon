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
        $EID = 0;
        // Taking all 5 values from the form data(input)
        $EID = $_REQUEST['eventid'];
        $p_name =  $_REQUEST['name'];
        $p_year = $_REQUEST['year'];
        $p_stream =  $_REQUEST['major'];
        $p_skills = $_REQUEST['skills'];
        $p_email = $_REQUEST['email'];
        $p_num = $_REQUEST['phone'];
         
        // Performing insert query execution
        // here our table name is Events
        $sql = "INSERT INTO participant VALUES ('$EID','$p_name',
            '$p_year','$p_stream','$p_skills','$p_email','$p_num')";
         
        if(mysqli_query($conn, $sql)){
            header("Location: participants.php");
            exit();
        }

        // if(mysqli_query($conn, $sql)){
        //     echo "<h3>data stored in a database successfully."
        //         . " Please browse your localhost php my admin"
        //         . " to view the updated data</h3>";
 
        //     echo nl2br("\n$p_name\n $p_year\n "
        //         . "$p_stream");
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