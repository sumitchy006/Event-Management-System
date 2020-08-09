<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sumit";

$connection=mysqli_connect($servername,$username,$password,$dbname);
	if(!$connection){
		echo "Database cannot connected";
	}

$query="select * from registration";
$result=mysqli_query($connection,$query);	


?>

<!-- Sumit -->

<!doctype html>
<html>
<head>
   
	<title>Databases</title>
	
</head>
<body>
     <table align="center" border="1px" style="width:1000px; line-height:50px;">
		<tr>
			<th colspan="9"><h2>Registration Table</h2></th>
		</tr>
		<tr>
			 <th>First_name</th>
			 <th>Last_name</th>
			 <th>Email</th>
			 <th>Mobile_No</th>
			 <th>Date</th>
			 <th>No.of_Person</th>
			 <th>Event</th>
			 <th>Decoration</th>
			 <th>Food</th>
		</tr>	 
	

	<?php 
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $rows['fname']; ?></td>
				<td><?php echo $rows['lname']; ?></td>
				<td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['mobile_no']; ?></td>
				<td><?php echo $rows['date_time']; ?></td>
				<td><?php echo $rows['no_of_person']; ?></td>
				<td><?php echo $rows['event_type']; ?></td>
				<td><?php echo $rows['decoration']; ?></td>
				<td><?php echo $rows['food']; ?></td>
			
			
			</tr>			
		
	<?php
		
		}
	?>

	</table>
	
</body>

</html>




