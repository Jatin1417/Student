<?php
include 'dbconnect.php';
$rno = $_GET['rno'];
$sql= "UPDATE student SET status=0 WHERE rno='$rno'";
				if(mysqli_query($conn, $sql)){
					echo "Status Updated";
				} else{
					echo "Status not Updated. "
						. mysqli_error($conn);
				}
?>