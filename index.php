<!DOCTYPE html>
<html lang="en">
<head>
	<title>Student Data Storing System</title>
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
			<form action="show_update_delete.php" target='_blank' method="post" enctype="multipart/form-data">
			  <p>
			  <input class="btn" type="submit" name="show" value="Show / Edit / Delete Record">
			  </p>
			</form>
			</div>
			<div class="footer">“Learning is a treasure that will follow its owner everywhere.” </div>
</body>
</html>
