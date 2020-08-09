<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sumit";

$connection=mysqli_connect($servername,$username,$password,$dbname);
	if(!$connection){
		echo "Database cannot connected";
	}

$query="select * from contact";
$result=mysqli_query($connection,$query);	


?>

<!-- Sumit -->

<!doctype html>
<html>
<head>
   
	<title>Databases</title>
	
</head>
<body>
     <table align="center" border="1px" style="width:800px; line-height:40px;">
		<tr>
			<th colspan="5"><h2>Contact Table</h2></th>
		</tr>
		<tr>
			
			 <th>First_name</th>
			 <th>Last_name</th>
			 <th>Email</th>
			 <th>Mobile_No</th>
			 <th>Message</th>
			
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
				<td><?php echo $rows['message']; ?></td>
			
			
			
			</tr>			
		
	<?php
		
		}
	?>

	</table>
	
</body>

</html>




