<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Booking Page</title>
	<link rel="stylesheet" href="../CSS/login.css"/>
</head>
<body>
	 <div id="id03" class="modal">
  
  <form class="modal-content" action="signupphp.php" method="post">
    <div class="cross">
      <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="full-content">
	<form class="modal-content" action="signupphp.php" method="post">
	   <h1>Sign Up</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
	
	
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
       
	  <label for="email"><b>Email</b></label>
	  <input type="text" placeholder="Enter Email" name="email" required> 
	   
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
       
      <label for="psw-repeat"><b>Repeat Password</b></label>
	  <input type="password" placeholder="Repeat Password" name="psw-repeat" required>   
	   
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br><br>	  
	  <input type="submit" value="Sign Up" name="submit" style="background-color:green; color:white ;height:45px; width:120px;"/>	  
    </div>

    <div class="full-content">
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
</body>
</html>