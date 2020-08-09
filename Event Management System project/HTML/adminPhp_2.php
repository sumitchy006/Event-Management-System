<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sumit";

$connection=mysqli_connect($servername,$username,$password,$dbname);
	if(!$connection){
		echo "Database cannot connected";
	}

$query="select * from signup_table";
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
			<th colspan="3"><h2>SignUp Table</h2></th>
		</tr>
		<tr>
			
			 <th>User_name</th>
			 <th>Email</th>
			 <th>Password</th>
			
		</tr>	 
	

	<?php 
		while($rows=mysqli_fetch_assoc($result))
		{
	?>
			<tr>
				<td><?php echo $rows['username']; ?></td>
				<td><?php echo $rows['email']; ?></td>
				<td><?php echo $rows['password']; ?></td>
			
			
			
			</tr>			
		
	<?php
		
		}
	?>

	</table>
	
</body>

</html>




