<!DOCTYPE html>
<?php
    $email = $_POST['email'];
    $password = $_POST['password'];

    //Database connection here
    $con = new mysqli("localhost", "root", "", "account");
    if($con->connect_error) {
        die("Failed to connect : ".$con->connect_error);
    } else {
        $stmt = $con->prepare("select * from registration where email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt_result = $stmt->get_result();
        if($stmt_result->num_rows > 0) {
            $data = $stmt_result->fetch_assoc();
            if($data['password'] === $password) {
                echo "<h2>Login Sucessful</h2>";
        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or Password</h2>";
    }
    }
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <title>Account Home</title>
  </head>

  <body>
    <section class="sub-header">
      <nav>
        <a href="index.html"><img src="images/book.logo.png" /></a>
        <div class="nav-links">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="library.html">Library</a></li>
            <li><a href="login.html">Log In</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="admin.php">Admin Page</a></li>
          </ul>
        </div>
      </nav>

      <h1>Account Home</h1>
    </section>
    <div class="user-container">
      <div class="menu-box">
        <div>
          <a onclick="tabs(0)" class="tab-active">
            <i class="fa fa-user"></i>
          </a>
          <a onclick="tabs(1)" class="tab">
            <i class="fa fa-download"></i>
          </a>
          <a onclick="tabs(2)" class="tab">
            <i class="fa fa-upload"></i>
          </a>
          <a onclick="tabs(3)" class="tab">
            <i class="fa fa-heart"></i>
          </a>
        </div>
      </div>
      <div class="info-box">
        <div class="personal-info tabShow">
          <h1>Personal Info</h1>
          <h2>Full Name</h2>
          <input type="text" class="input" value="Thanh Nguyen" />
          <h2>Birthday</h2>
          <input type="text" class="input" value="November 10" />
          <h2>Gender</h2>
          <input type="text" class="input" value="Male" />
          <h2>Email</h2>
          <input type="text" class="input" value="example@example.com" />
          <h2>Password</h2>
          <input type="password" class="input" value="1234" />
          <button>Update</button>
        </div>
        <div class="download tabShow">
          <h1>Book Downloaded</h1>
          <h2>Book Name</h2>
          <input type="text" class="input" value="Book 1" />
          <h2>Author</h2>
          <input type="text" class="input" value="Author 1" />
          <h2>ISBN</h2>
          <input type="text" class="input" value="978-3-16-148410-0" />
        </div>
        <div class="upload tabShow">
          <h1>Book Uploaded</h1>
          <h2>Book Name</h2>
          <input type="text" class="input" value="Book 2" />
          <h2>Author</h2>
          <input type="text" class="input" value="Author 2" />
          <h2>ISBN</h2>
          <input type="text" class="input" value="978-3-16-148410-1" />
        </div>
        <div class="Favorite-List tabShow">
          <h1>Book List</h1>
          <h2>Book Name</h2>
          <input type="text" class="input" value="Book 3" />
          <h2>Author</h2>
          <input type="text" class="input" value="Author 3" />
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
