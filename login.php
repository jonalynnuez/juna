<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>P-SHOP</title>
      <link rel="icon" href="logo.jpg">
      <link rel="stylesheet" href="style.css">
      <link href="https://fonts.googleapis.com/css?family=Darker+Grotesque:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
      <link rel="stylesheet" href="https://cdn.rawgit.com/daneden/animate.css/v3.1.0/animate.min.css">
      <script src="https://cdn.rawgit.com/matthieua/WOW/1.0.1/dist/wow.min.js"></script>
</head>
<body>
      
      <a name="home"></a>
      <div class="wrapper">

            <nav class="nav">
                  <span id="brand">
                        <a href="index.html">PLANT SHOP</a>
                  </span>

                  <ul id="menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="reg.php">Sign up</a></li>
                        <li><a href="product.php">Product</a></li>
                        <li><a href="contacts.php">Contact</a></li>
                  </ul>

            </nav>
			
			</body>
			
	<section>
	<br><br><br><br><br><br>
<form action="login.php" method="post">

   

   <?php if (isset($_GET['error'])) { ?>

	   <p class="error"><?php echo $_GET['error']; ?></p>

   <?php } ?>

   <label>User Name</label>

   <input type="text" name="uname" placeholder="User Name"><br>

   <label>Password</label>

   <input type="password" name="password" placeholder="Password"><br> 
   <button class="btn btn-primary" id="register" name="register">Log in</button>

</form>


</section>
</html>

