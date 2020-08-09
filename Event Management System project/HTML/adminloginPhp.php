<!DOCTYPE HTML>
<html lang="en-US">
<head>
	
   	
</head>
<body>
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
	
	$uname=$_REQUEST['uname'];
	$psw=$_REQUEST['psw'];
	
	$select="SELECT * FROM adminlogin where admin_user='$uname' and password='$psw'";
	$run=mysqli_query($connection,$select);
	$row=mysqli_num_rows($run);
	if($row==1){
		header("Location:adminPanel.php");
    }
	else{
		echo "Username or Password Wrong!";
	}
	
}

?>
</body>
</html>

