<?php
include("conn.php");

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
      <li><a href="logout.php">Logout</a></li>
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

<!----Library Content---->

<section class="">
    <div class="row">
        <div class="">
            <div>
                <span>
                    <h1>Library Catalog</h1>
                </span>
            </div>			
        </div>
    <div class="account-col">

<style>
                table {
                    border-collapse: collapse;
                    width: 100%;
                    text-align: left;
                }
                th, td {
                    padding: 10px;
                    border: 1px solid black;
                }
                th {
                    background-color: clear;
                }
                tr:nth-child(even) {
                    background-color: #f2f2f2;
                }

</style>
        </head>
        <body>
            <input type="text" id="searchInput" placeholder="">
            <button onclick="filterTable()">Search</button>
            <table id="bookTable">
                <tbody>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Genre</th>
                    </tr>
                </thead>
                <?php  $data=mysqli_query($conn,"SELECT * FROM `book`");
	              while($row = mysqli_fetch_array($data))
	               {      $bookid=$row["b_id"];
                        $link="<a href ='bookdetail.php?id=$bookid'>";
                        echo "<td>"; echo"$link";echo $row["booksname"]; echo "</a>"; echo "</td>";
                        echo "<td>"; echo $row["authorname"]; echo "</td>";
                        echo "<td>"; echo $row["genre"]; echo "</td>";
                        echo "</tr>";
          
                      
                    }

	            ?>
            </table>
            <script>
                function filterTable() {
                    var input, filter, table, tr, td, i, txtValue;
                    input = document.getElementById("searchInput");
                    filter = input.value.toUpperCase();
                    table = document.getElementById("bookTable");
                    tr = table.getElementsByTagName("tr");
                    for (i = 0; i < tr.length; i++) {
                        td = tr[i].getElementsByTagName("td");
                        for (var j = 0; j < td.length; j++) {
                            if (td[j]) {
                                txtValue = td[j].textContent || td[j].innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                    break;
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }
                        }
                    }
                }
            </script>
        </body>
        </html>
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