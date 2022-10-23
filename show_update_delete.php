<?php
include 'dbconnect.php';
$result = mysqli_query($conn,"SELECT * FROM student");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Show_Update_Delete Page</title>
   <link rel="stylesheet" href="mystyle.css" class="mystyle">
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table >
	  <tr>
	    <td>Roll No.</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Date of Birth</td>
		<td>Address</td>
		<td>Image name</td>
		<td>update</td>
		<td>delete</td>
	  </tr>
  
		<?php	
			while($row = mysqli_fetch_assoc($result)) {
				
				if($row['status']==1){
					echo "<tr>
					<td> ".$row['rno']."</td>	  
					<td> ".$row['first_name']."</td>
					<td> ".$row['last_name']." </td>
					<td> ".$row['DOB']." </td>
					<td> ".$row['address']." </td>
					<td> ".$row['img_name']." </td>
					<td><a href='update.php?rno=$row[rno]' target='_blank'>Update</a></td>
					<td><a href='delete.php?rno=$row[rno]' target='_blank'>Delete</a></td>
					</tr> ";		
				}	
		   }
}
else
{
    echo "No result found";
}
?>
			
</table>

 </body>
</html>