<?php
include 'dbconnect.php';
?>
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page</title>
</head>
 
<body>
    <center>
        <?php
         
		if(isset($_POST['submit']))
		{
		$rno = $_REQUEST['rno'];
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $DOB =  $_REQUEST['DOB'];
        $address = $_REQUEST['address'];
        $img = $_FILES['image']['name'];
        move_uploaded_file($_FILES['image']['tmp_name'],"upload/$img");
        $id=0;

        // Performing insert query execution
        // here our table name is student
        $sql = "INSERT INTO student  VALUES ('$id','$rno','$first_name',
            '$last_name','$DOB','$address','$img',1)";
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$rno \n$first_name\n $last_name\n "
                . "$DOB\n $address\n $img");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
		}
         
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
 
</html>