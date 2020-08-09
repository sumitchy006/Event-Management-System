    <!-- User login start-->  
	<div id="id01" class="modal">
  
  <form class="modal-content" action="loginphp.php" method="post">
    <div class="cross">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="full-content">
      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter your eamil" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <input type="submit" value="Log In" name="submit" style="background-color:green; color:white ;height:45px; width:120px;"/>	
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="full-content">
      <button type="button" onclick="document.getElementById('id03').style.display='block'" >Sign up</button>
      <span class="psw"> <a href="#">Forgot password?</a></span>
    </div>
  </form>
</div>
	
	
	
	<!-- Admin login start-->
	
	
	<div id="id02" class="modal">
  
  <form class="modal-content" action="adminloginPhp.php" method="post">
    <div class="cross">
      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
      
    </div>

    <div class="full-content">
      <label for="uname"><b>AdminName</b></label>
      <input type="text" placeholder="Enter Admin name" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Admin Password" name="psw" required>
        
      <button type="submit" value="Log In" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="full-content">
      <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
	
	
	
	
	<!-- Sign up start-->
	
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
	