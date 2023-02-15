<!DOCTYPE html>
<html>
<head>

<!---new data content--->



<!--- beginning of page content--->

<style>
.btn {
    background-color: black;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 10%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }
  
  .btn:hover {
    background-color: #f44336;
    transition: 1s;
  }
</style>

	<meta name="viewport" content="with=device-width, intitial-scale=1.0">
	<title>Sign In</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<section class="header">
		<nav>
			<a href="index.html"><img src="images/book.logo.png"></a>
			<div class="nav-links">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="library.html">Library</a></li>
					<li><a href="account.php">Sign In</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="admin.php">Admin Page</a></li>
				</ul>
			</div>
		</nav>

		<h1>Sign In</h1>

	</section>

<!----------- login content ----------->

<section class="account-us">
	<div class="row">
		<div class="account-col">
			<div>
				<span>
					<h5>Log In</h5>
				</span>
			</div>			
		</div>
<div class="account-col">

	<form action="">
		<input type="text" placeholder="Email"required>
		<input type="email" placeholder="Password"required>
		<button type="submit" class="black-btn">Log In</button>
	</form>
			
		</div>
	
</section>

<!----- Footer----->

<section class="footer">
	<h4>eBooks Only</h4>
	<p>Created by Tyvan Vang</p>	
</section>




</body>
</html>