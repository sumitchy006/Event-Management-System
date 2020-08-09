<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <style>
       
		a{
			display:block;
			text-align:right;
			font-size:30px;
			color:red;
			text-decoration:none;
		}
    </style>	
</head>
<body>
	<a href="index.php" >Logout</a>
	
	<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sumit";

$connection=mysqli_connect($servername,$username,$password,$dbname);
	if(!$connection){
		echo "Database cannot connected";
	}
	?>
	<?php
	if (isset($_REQUEST['submit'])){
		//session_start();
       // $email=$_SESSION['email'];
        //$password=$_SESSION['password'];	
		//echo $email;
	
	$email=$_REQUEST['email'];
	$password=$_REQUEST['password'];
	
	//echo $email;
	
	$select="SELECT * FROM signup_table where email='$email' and password='$password'";
	$run=mysqli_query($connection,$select);
	$row=mysqli_num_rows($run);
	if($row==1){
		$select="SELECT * FROM registration where email='$email'";
		$run=mysqli_query($connection,$select);
		$row=mysqli_num_rows($run);
		if($row==1){
		while($match=mysqli_fetch_array($run)){
			
?>			
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
	

	
			<tr>
				<td><?php echo $match[0]; ?></td>
				<td><?php echo $match[1]; ?></td>
				<td><?php echo $match[2]; ?></td>
				<td><?php echo $match[3]; ?></td>
				<td><?php echo $match[4]; ?></td>
				<td><?php echo $match[5]; ?></td>
				<td><?php echo $match[6]; ?></td>
				<td><?php echo $match[7]; ?></td>
				<td><?php echo $match[8]; ?></td>
			
			
			</tr>			
		
	

	</table>
			
			
	<?php
		
		}
	?>		
			
       
	<?php
			
			
		}
		
	}
	else{
		echo "Username or Password Wrong!";
	}
	
}

?>
</body>
</html>
