<?php
$servername="localhost";
$username="root";
$password="";
$dbname="sumit";

$connection=mysqli_connect($servername,$username,$password,$dbname);
	if(!$connection){
		echo "Database cannot connected";
	}
if (isset($_REQUEST['submit'])){
	$uname=$_REQUEST['uname'];
	$email=$_REQUEST['email'];	
	$password=$_REQUEST['psw'];
	
	$insert="INSERT INTO signup_table VALUES ('$uname','$email','$password');";
	$quary=mysqli_query($connection,$insert);

	if($quary==True){
	  echo "Successfully Sign up";
	}
	else{
		echo "Wrong";
	}	
	
	
}
	


?>