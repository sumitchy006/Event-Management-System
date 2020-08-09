<!-- Sumit -->

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Event management</title>
	<link rel="stylesheet" href="../CSS/login.css"/>
	<link type="text/css" rel="stylesheet" href="../CSS/contact.css"/>
	<link type="text/css" rel="stylesheet" href="../CSS/style.css"/>
	<link type="text/css" rel="stylesheet" href="../CSS/responsive.css"/>
	
</head>
<body>
	<?php 
	include("../include/nav.php");
	?>
	
	
	<?php 
	include("../include/login.php");
	?>
	
	

	<!-- ten-section start-->
	<section id="ten-section">
		<div class="container">
			<div id="one">
			
				<form action="contactPhp.php"  method="post">
                 
				<label for="fname" id="cl">First Name</label>
				<input type="text" id="fname" name="fname" placeholder="Your first name..">

				<label for="lname" id="cl">Last Name</label>
				<input type="text" id="lname" name="lname" placeholder="Your last name..">
                
				<label for="lname" id="cl">Email</label>
				<input type="email" id="email" name="email" placeholder="Enter your email..">
				
				<label class="control-label" id="cl">Phone Number <span>*</span></label>
                <input type="text" name="mobile_no" class="form-control white_bg" id="phonenumber" required>
				

				<label for="subject" id="cl">Message</label>
				<textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				<input type="submit" value="submit" name="submit">

				</form>
			</div>
			
			<div id="two">
			    <h3>Contact Info</h3>
				<div class="contact_nav">
					<ul>
						<li><a href="#">Address: Zindabazer,Sylhet</a></li>
						<li><a href="#">Email ID: sumitchy006@gmail.com</a></li>
						<li><a href="#">Contact No:+880-1718389186</a></li>
					
					</ul>
				</div>
			
			</div>
		</div><!-- container end-->
	</section><!-- fifth-section end-->
	
	<section id="last-section">
		<div class="container">
			<div class="last-one">
				<h2>Follow US:</h2>
				<ul>
					<li><a href="#"><img src="../images/facebook.png" alt=""/></a></li>
					<li><a href="#"><img src="../images/twitter.png" alt=""/></a></li>
					<li><a href="#"><img src="../images/googleplus.png" alt=""/></a></li>
					
					<li><a href="#"><img src="../images/youtube.png" alt=""/></a></li>	
				</ul>						
			</div>
		</div><!-- container end-->
	</section><!-- second-section end-->
	
	<!-- footer start-->
	<footer id="footer">
		<p>&copy;  all rights reserved by Sumit</p>
	</footer><!-- footer end-->
	
	
	
	

</body>

</html>