<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
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
<html>
<section class="sub-header">
<nav> 
  <a href="index.html"><img src="images/book.logo.png"></a>
  <div class="nav-links">
    <ul>
      <li><a href="library.php">Library</a></li>
	  <li><a href="account.php">My Account</a></li>
	  <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>
</nav>
</section>

<!----- content begins----->

</body>
</html>

<head>
    <title>Homepage</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="validation.js" defer></script>
</head>
<body>
    
<section class="about-us">
	
	<div class="row">
		<div class="about-col">

        <a href="index.html"><img src="images/welcome.jpg"></a>
			
        <?php if (isset($user)): ?>
        
        <h1>Hello <?= htmlspecialchars($user["name"]) ?>!</h1>

        <h2>Welcome to eBooks Only! Where you can be a free reader. Literally!</h2>
        
    <?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>

		</div>
		<div class="about-col">
	</div>

</section>

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