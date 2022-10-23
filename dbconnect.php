<?php       
        // servername => localhost
        // username => root
        // password => empty
        // database name => school
        $conn = mysqli_connect("localhost", "root", "", "school");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
?>