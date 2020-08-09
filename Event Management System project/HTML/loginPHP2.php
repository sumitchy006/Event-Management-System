			 
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
    <style>
        .tb{
            border-collapse:collapse;
            width:80%;
            margin:2%;
        }
        .tb,.th,.td{
            border:1px solid green;
        }
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
	
	echo $email;
	
	$select="SELECT * FROM signup_table where email='$email' and password='$password'";
	$run=mysqli_query($connection,$select);
	$row=mysqli_num_rows($run);
	if($row==1){
		$select="SELECT * FROM registration where email='$email'";
		$run=mysqli_query($connection,$select);
		$row=mysqli_num_rows($run);
		if($row==1){
		while($match=mysqli_fetch_array($run)){
        
		   echo "<table class=\"tb\">
			 <th class=\"th\">First_name</th>
			 <th class=\"th\">Last_name</th>
			 <th class=\"th\">Email</th>
			 <th class=\"th\">Mobile_No</th>
			 <th class=\"th\">Date</th>
			 <th class=\"th\">No.of_Person</th>
			 <th class=\"th\">Event</th>
			 <th class=\"th\">Decoration</th>
			 <th class=\"th\">Food</th>
			 <tr>
			 <td class=\"td\">$match[0]</td>
			 <td class=\"td\">$match[1]</td>
			 <td class=\"td\">$match[2]</td>
			 <td class=\"td\">$match[3]</td>
			 <td class=\"td\">$match[4]</td>
			 <td class=\"td\">$match[5]</td>
			 <td class=\"td\">$match[6]</td>
			 <td class=\"td\">$match[7]</td>
			 <td class=\"td\">$match[8]</td>
			 </tr>        
			 </table>";
			}
			
		}
		
	}else{
		echo "Username or Password Wrong!";
	}
	
}

?>
</body>
</html>
			 
			 