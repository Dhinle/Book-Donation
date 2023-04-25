
<?php
include("conn.php");

$msg="";
session_start();
//account validation
if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
 
?>
<!DOCTYPE html>

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
.menu-box{
  font-size: 30px;
}
span{
  margin-right: 10px;
}
</style>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>

    <title>Admin</title>
  </head>
  <body>

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

    <div class="user-container">
      <div class="menu-box">
        <div>
          <a onclick="tabs(0)" class="tab">
            <span>Add</span>
          </a>

          <a onclick="tabs(1)" class="tab">
            <span>Delete</span>
          </a>
          <a onclick="tabs(2)" class="tab">
            <span>Edit</span>
          </a>
        </div>
    </div>
   <!-- Add Book -->
      <div class="info-box">
        <div class="personal-info tabShow">
          <h1>Add Book</h1>
          <form action="addbook.php" method="POST" enctype="multipart/form-data">
          <tr>
            <h2>BOOK NAME:</h2>
            <td><input type="text" name="booksname" placeholder="books name" require/></td>
            </tr>

	        <tr>
            <h2>AUTHOR NAME:</h2>
            <td><input type="text" name="authorname" placeholder="books author name" require/></td>
                  <td style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td>
          </tr>

          <tr>
            <h2>Genre:</h2>
          <td>
          <select name="genre">
            <option value="Classic">Classics</option>
            <option value="Fantasy">Fantasy</option>
            <option value="Science Fiction">Science Fiction</option>
            
            </select>
            
          </td>
          </tr>

          <tr>
          <h2>UPLOAD EBOOK:</h2>
          <td><input class="submit" type="file" name="file"  /></td>
          </tr>
              <tr>
            <td><h2><input type="submit" name="sub" value="SUBMIT"/></h2></td>
            </tr>
         </form>
        </form>
        </div>
        <!-- Delete Book -->
        <div class="delete tabShow">
          <h1>Delete Book</h1> 
          <form action="delbook.php" method="POST" enctype="multipart/form-data">
          <td><input type="text" name="book_id" placeholder="Book ID"></td>
          <td><h2><input type="submit" name="sub" value="Delete"></h2></td>
          </form>
        </div>
        <!-- Edit Book-->
        <div class="edit tabShow">
          <h1>Edit Book</h1> 
          <form action="editbook.php" method="POST" enctype="multipart/form-data">
          <tr>
              <h2>BOOK ID:</h2>
              <td><input type="text" name="book_id" placeholder="Book ID" require/></td>
              </tr>

            <tr>
            <tr>
              <h2>BOOK NAME:</h2>
              <td><input type="text" name="booksname" placeholder="Book Name" require/></td>
              </tr>

            <tr>
              <h2>AUTHOR NAME:</h2>
              <td><input type="text" name="authorname" placeholder="Author Name" require/></td>
                    <td style="color:red;font-weight:bold;text-align:center"><?php echo $msg; ?></td>
            </tr>

            <tr>
              <h2>Genre:</h2>
            <td>
            <select name="genre">
              <option value="Classic">Classics</option>
              <option value="Fantasy">Fantasy</option>
              <option value="Science Fiction">Science Fiction</option>
              
              </select>
              
            </td>
            </tr>

            <tr>
            <h2>UPLOAD EBOOK:</h2>
            <td><input class="submit" type="file" name="file"  /></td>
            </tr>
                <tr>
              <td><h2><input type="submit" name="sub" value="SUBMIT"/></h2></td>
              </tr>
          </form>
        </div>
      </div>
    </div>
  </body>

  <script src="jquery/jquery.js"></script>
  <script>
    const tabBtn = document.querySelectorAll(".tab");
    const tab = document.querySelectorAll(".tabShow");

    function tabs(panelIndex) {
      tab.forEach(function (node) {
        node.style.display = "none";
      });
      tab[panelIndex].style.display = "block";
    }
    tabs(0);
  </script>
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
