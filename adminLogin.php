<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM adminLog
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $admin = $result->fetch_assoc();
    
    if ($admin) {
        
        if (password_verify($_POST["password"], $admin["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["admin_id"] = $admin["id"];
            
            header("Location: adminindex.php");
            exit;
        }
    }
    
    $is_invalid = true;
}
?>

<!DOCTYPE html>
<html>
<head>

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
<nav>
    <a href="index.html"><img src="images/book.logo.png"></a>
  <div class="nav-links">
    <ul>
      <li><a href="index.html">Home</a></li>
      <li><a href="login.php">Log In</a></li>
      <li><a href="about.html">About</a></li>
      <li><a href="adminLogin.php">Admin</a></li>
    </ul>
  </div>
</nav>
</div> 

</body>
</html>

    <title>Admin Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>
<body>
    
    <h1>Admin Login</h1>
    
    <?php if ($is_invalid): ?>
        <em>Invalid Email or Password</em>
    <?php endif; ?>
    
    <form method="post">
        <label for="email">Email</label>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        
        <button type="button" class="toggle-password-button" onclick="togglePasswordVisibility()">Show/Hide Password</button>

<script>
function togglePasswordVisibility() {
  var passwordField = document.getElementById("password");
  if (passwordField.type === "password") {
    passwordField.type = "text";
  } else {
    passwordField.type = "password";
  }
}
</script>
    <div>
        <button>Login</button>
    </div>
    </form>

    <form action="signup.html">
    <label for="signup">Don't have an account?</label>
	<input type="submit" value="Sign Up" class="btn">
    </form>
    
<!----- Footer----->

<section class="footer">
	<h4>eBooks Only</h4>
	<p>Copyright &#169 2023 eBooks Only All Rights Reserved.</p>	
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