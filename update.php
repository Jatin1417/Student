<?php
include 'dbconnect.php';
$rno = $_GET['rno'];
$query= mysqli_query($conn,"SELECT * FROM student where rno='$rno'");
$result=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Update Page</title>
	<link rel="stylesheet" href="style.css" class="mystyle">

</head>
<body>
<nav class="top"><img src="school.png" class="school">NGP High School</nav>
			<h1>Enter Student Information</h1>
			<div>
			<form action="insert_data.php" target='_blank' method="post" enctype="multipart/form-data">
				
				<p>
				<label for="Rollno">Roll No.:</label>
				<input type="text" name="rno" id="Rollno">
				</p>
				
				<p>
				<label for="firstName">First Name:</label>
				<input type="text" name="first_name" id="firstName">
				</p>
				
				<p>
				<label for="lastName">Last Name:</label>
				<input type="text" name="last_name" id="lastName">
				</p>

				<p>
				<label for="dob">Date Of Birth:</label>
				<input type="date" name="DOB" id="dob">
				</p>
				
				 <p>
				<label for="Address">Address:</label>
				<input type="text" name="address" id="Address">
				</p>
				
				<p>
				<label for="Image">Image Upload:</label>
				<input type="file" name="image" id="Image">
				</p>

				<input class="btn" type="submit" target='_blank' name="submit" value="Save">
			</form>
			</div>
			<div class="footer">“Learning is a treasure that will follow its owner everywhere.” </div>
		<?php
		    if(isset($_POST['Update'])){
				$rn=$_POST['rn'];
				$fname=$_POST['first_name'];
				$lname=$_POST['last_name'];
				$dob=$_POST['DOB'];
				$ad=$_POST['address'];
				$img=$_FILES['image']['name'];
				move_uploaded_file($_FILES['image']['tmp_name'],"upload/$img");
				$sql= "UPDATE student SET rno=$rn, first_name='$fname', last_name='$lname', DOB='$dob', address='$ad', img_name='$img',status=1 WHERE rno='$rno'";
				if(mysqli_query($conn, $sql)){
					echo "Record Updated";
				} else{
					echo "Not Updated. "
						. mysqli_error($conn);
				}

			}
		?>
</body>
</html>