<?php
include("conn.php");
session_start();
$id=$_GET['id'];
$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($conn,$query);
$ros=mysqli_fetch_array($query1);
$book_name=$ros['booksname'];
$auth_name=$ros['authorname'];

if(isset($_POST['sub'])){
    
$query="select * from book where `book`.`b_id`= '$id'";
$query1=mysqli_query($conn,$query);
$ros=mysqli_fetch_array($query1);
$path=$ros['path'];
header('content-Disposition: attachment;filename = '.$id.'');
header('content-type:application/pdf');
header('content-length='.filesize($path));
readfile($path);

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
<section class="sub-header">
<nav> 
  <a href="index.php"><img src="images/book.logo.png"></a>
  <div class="nav-links">
    <ul>
      <li><a href="library.php">Library</a></li>
      <li><a href="account.php">My Account</a></li>
      <li><a href="about.html">About</a></li>
    </ul>
  </div>
</nav>
</section>
</div> 

</body>
</html>

<head>
    <title>Library</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="validation.js" defer></script>
</head>
<body>

<!----bookdetail Content---->

  <div class="book-detail">
          <h2>Book Name</h2>
          <?php if (isset($ros)): ?>
          <h3><?= htmlspecialchars($ros["booksname"]) ?></h3>
          <?php endif; ?>
          <h2>Author</h2>
          <?php if (isset($ros)): ?>
          <h3><?= htmlspecialchars($ros["authorname"]) ?></h3>
          <?php endif; ?>
          
  </div> 
      <tr>
        <td>
          
          <h2><a href="download.php?file=<?= htmlspecialchars($ros["booksname"]) ?>.pdf">Download Book</a></h2>
        </td>
      </tr>

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