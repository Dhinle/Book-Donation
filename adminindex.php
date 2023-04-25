<?php

session_start();

if (isset($_SESSION["admin_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM adminLog
            WHERE id = {$_SESSION["admin_id"]}";
            
    $result = $mysqli->query($sql);
    
    $admin = $result->fetch_assoc();
}

?>


<style>
*{
	margin: 0;
	padding: 0;
	font-family: 'Poppins', sans-serif;
}
.header{
	min-height: 120vh;
	width: 100%;
	background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url(images/book.background.jpg);
	background-position: center;
	background-size: cover;
	position: relative;
	padding-top: 10px;
	padding-bottom: 10px;
}
/*-----nav links----*/
  nav img{
	width: 150px;
}
.nav-links{
	flex: 1;
	text-align: right;
}	
.nav-links ul li{
		list-style: none;
		display: inline-block;
		padding: 8px 12px;
		position: relative;
}
.nav-links ul li a{
	color: #fff;
	text-decoration: none;
	font-size: 16px;
}	
.nav-links ul li::after{
	content: '';
	width: 0%;
	height: 2px;
	background: #f44336;
	display: block;
	margin: auto;
	transition: 0.5s;
}
.nav-links ul li:hover::after{
	width: 100%;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="validation.js" defer></script>
  <title>Admin </title>
</head>

  <section class="sub-header">
<nav> 
  <a href="adminindex.php"><img src="images/book.logo.png"></a>
  <div class="nav-links">
    <ul>
			<li><a href="adlibrary.php">Book List</a></li>
			<li><a href="userlist.php">User List</a></li>
      		<li><a href="book.php">Book</a></li>
			<li><a href="user.php">User</a></li>
			<li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</section>
<body>
      <section class="about-us">
	
	<div class="row">
		<div class="about-col">

        <a href="index.html"><img src="images/welcome.jpg"></a>
			
        <?php if (isset($admin)): ?>
        
        <h1>Welcome Back <?= htmlspecialchars($admin["name"]) ?>!</h1>

        <h2>You are logged in as admin!</h2>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>

		</div>
		<div class="about-col">
	</div>

</section>
</body>
</html>

<!----- Footer----->

<section class="footer">
    <p>Have a question? <a href="contact.html" class="hero-btn">Contact Us</a></p>
	<p>Copyright &#169 2023 eBooks Only | All Rights Reserved.</p>	
</section> 

</body>
</html>

<style>
	.footer {
	  position: fixed;
	  left: 0;
	  bottom: 0;
	  width: 100%;
	  color: white;
	  text-align: center;
	}
</style>
	
	<div class="footer">
	  <p></p>
	</div>