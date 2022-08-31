<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>

        <nav class="nav1">
                  <span id="brand1">
                        <a href="index.php">PLANT SHOP</a>
                  </span>

                  <ul id="menu1">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="reg.php">Sign Up</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                  </ul>

            </nav>
	</head>
<body>
    

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<a class="navbar-brand">REGISTRATION</a>
		</div>
	</nav>
	<div class="col-md-3"></div>
	<div class="col-md-6 well">
		<h3 class="text-primary">Customer Registration</h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-6">
			<form method="POST" action=""> 
				<div class="form-group"> 
					<label>Lastname</label>
					<input type="text" class="form-control" name="lastname" required="required"/>
				</div>
				<div class="form-group">
					<label>Firstname</label>
					<input type="text" class="form-control" name="firstname" required="required"/>
				</div>
				<div class="form-group">
					<label>M.I</label>
					<input type="text" class="form-control" name="mi" required="required"/>
				</div>
				<div class="form-group">
					<label>Contact No.</label>
					<input type="text" class="form-control" name="cno" required="required"/>
				</div>
                <div class="form-group">
					<label>Address</label>
					<input type="text" class="form-control" name="address" required="required"/>
				</div>
                <div class="form-group">
					<label>Username</label>
					<input type="text" class="form-control" name="username" required="required"/>
				</div>
                <div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" required="required"/>
				</div>
                
				<p><input type="checkbox" id="toggle"/> I agree with the terms and conditions.</p>
				<button class="btn btn-primary" id="register" name="register">Register</button>
			</form>
		</div>
		<div class="col-md-6">
		<?php include 'register.php'?>
		</div>
	</div>
<script>
var checkbox = document.getElementById("toggle");
var register = document.getElementById("register");
register.disabled = true;
checkbox.onchange = function(){
	register.disabled = !this.checked;
}
</script>	
</body>
</html>