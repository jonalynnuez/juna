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
                        <a href="">PLANT SHOP</a>
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
                <br><br><br><br><br><br><br>
            <div class="row">
 
  <div class="column">
    <div class="content">
      <img src="p2.jpg" alt="Lights" style="width:250px; height:250px">
      <h3>Plant 1</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="p3.jpg" alt="Nature" style="width:250px; height:250px">
      <h3>Plant 2</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
      <img src="p4.jpg" alt="Mountains" style="width:250px; height:250px">
      <h3>Plant 3</h3>
      <p>Lorem ipsum..</p>
    </div>
  </div>
</div>

</div>
</section>

<script>
* {
  box-sizing: border-box;
}

section {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}


.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}


.row,
.row > .column {
  padding: 8px;
}

.column {
  float: left;
  width: 25%;
}


.row:after {
  content: "";
  display: table;
  clear: both;
}


.content {
  background-color: white;
  padding: 10px;
}


@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}


@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</script>