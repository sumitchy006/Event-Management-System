<?php
	//Datbase Connection
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="sumit";

	$connection=mysqli_connect($servername,$username,$password,$dbname);
	if(!$connection){
		echo "Database cannot connected";
	}
	
	
	
	if(isset($_REQUEST['submit'])){
		$fname=trim($_REQUEST['fname']);
		$lname=trim($_REQUEST['lname']);
		$email=trim($_REQUEST['email']);
		$mobile=trim($_REQUEST['mobile']);
		$date_time=trim($_REQUEST['date_time']);
		$person=trim($_REQUEST['person']);
		$event=trim($_REQUEST['event']);
		$decoration=trim($_REQUEST['decoration']);
		$food=trim($_REQUEST['food']);
		
		

	$insert="INSERT INTO registration values('$fname','$lname','$email','$mobile','$date_time','$person','$event','$decoration','$food');";
	
	$quary=mysqli_query($connection,$insert);
	
	if($quary==True){
	  echo "Successfully Submitted";
	}
	else{
		echo "Wrong...!";
	}
}

?>