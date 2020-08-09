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
	$fname=$_REQUEST['fname'];
	$lname=$_REQUEST['lname'];
	$email=$_REQUEST['email'];	
	$mobile=$_REQUEST['mobile_no'];
	$sub=$_REQUEST['subject'];
	
	$insert="INSERT INTO contact VALUES ('$fname','$lname','$email','$mobile','$sub');";
	$quary=mysqli_query($connection,$insert);
	
	if($quary==True){
	  echo "Submitted";
	}
	else{
		echo "Wrong...!";
	}	
	
}
	


?>