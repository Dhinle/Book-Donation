<?php
include("conn.php");
$msg="";
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
            <span>Edit</span>
          </a>

          <a onclick="tabs(1)" class="tab">
            <span>Delete</span>
          </a>
        </div>
    </div>
        <!-- Edit User-->
              <div class="edit tabShow">
                <h1>Edit User</h1> 
                <form action="edituser.php" method="POST" enctype="multipart/form-data">
                  <tr>
                    <h2>User ID:</h2>
                    <td><input type="text" name="user_id" placeholder="User ID" require/></td>
                    </tr>

                  <tr>
                  <tr>
                  <h2>User Name:</h2>
                  <td><input type="text" name="name" placeholder="User Name" require/></td>
                  </tr>

                  <tr>
                  <h2>User Email:</h2>
                  <td><input type="text" name="email" placeholder="User Email" require/></td>
                  </tr>


                  <tr>
                  <td><h2><input type="submit" name="sub" value="SUBMIT"/></h2></td>
                  </tr>
                </form>
              </div>
        <!-- Delete User -->
        <div class="delete tabShow">
          <h1>Delete User</h1> 
          <form action="deluser.php" method="POST" enctype="multipart/form-data">
          <td><input type="text" name="user_id" placeholder="User ID"></td>
          <td><h2><input type="submit" name="sub" value="Delete"></h2></td>
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
