<!DOCTYPE html>

<?php

echo "Welcome";

?>
	<head>
		<link rel="stylesheet" href="_1.css">
		
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	</head>
	
	<body bgcolor="#f8f9f9">
	
		<div>
			<header>
			<h1 id="_1">
				E-Library Management System
			</h1>
			</header>
			<ul>
				<li><a href="log-home.php">Home</a></li>
				<li><a href="ebook.php">Download-ebook</a></li>
				<li><a href="feed-log.html">feedback</a></li>
				<li><a href="search_.php">Search</a></li>
				
				<li style="float:right;"><a href="home.html">LogOut</a></li>	
			</ul>
			
		</div>
		
			<div style="display:inline;float:left;width:100%;height:480px;border:5px solid grey;"">	
					<iframe src="slide-show.html" height="480px" width="65%"></iframe>
		
				<div id="butt_" style="width:34%;float:right;display:inline;">	
					<h1><a href="ebook.php">DOWNLOAD FREE E-BOOKS</a></h1>
					<a href="ebook.php" target="_blank">
					<img src="images/d-book.png" alt="Top Trending Free eBooks" width="90%" height="300px"></a>
				</div>
	
				<div id="id01" class="modal">
  
					<form class="modal-content animate" action="connect.php" method="post">
						<div class="imgcontainer">
							<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							<img src="images/e-user-.png" alt="e-user" class="avatar">
						</div>

						<div class="container">
							<label><b>Username</b></label>
							<input type="text" placeholder="Enter Username" name="uname" required="required">

							<label><b>Password</b></label>
							<input type="password" placeholder="Enter Password" name="psw" required="required">
        
							<button type="submit" name="login">Login</button>
							
						</div>

						<div class="container" style="background-color:#f1f1f1">
							<button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
						</div>
					</form>
				</div>
				<div style="height:50px;background-color:#33333f;"></div>
				
				<h1></h1>	<h1></h1>
	<div id="_if">	
	
	<iframe name="iif" width="65%" height="500px" allowfullscreen src="book_snap/1.png" scrolling="no"></iframe>

	<iframe width="33%" height="500px" allowfullscreen src="d-ebook.html" scrolling="no"></iframe>
	</div>
	
	<h1></h1><h1></h1>
	
		<div id="table-block" style="height:1100px;display:inline">
					<table style="1px solid black;width:100%">
						<caption><h1 style="font-size:45px">E-BOOKS</h1></caption>
						<tr>
							<td  class="show">
								<div><a href="book_snap/1.png" target="iif">
								<img src="book/pic/b.png">
								<h1>ORGANIC MEDICINAL</h1></a>
								</div>
							</td>
							<td  class="show">
								<div><a href="book_snap/2.png" target="iif">
								<img src="book/pic/b1.png">	
									<h1>MEDICINAL CHEMISTRY</h1></a>
								</div>
							</td>
							<td  class="show">
								<div><a href="book_snap/6.jpg" target="iif">
								<img src="book/pic/b2.png">	
									<h1>CLINICAL PHARMACY</h1></a>
								</div>
							</td>
						</tr>
						<tr>
							<td  class="show">
								<div><a href="book_snap/4.jpg" target="iif">
								<img src="book/pic/b3.png">	
									<h1>CLINICAL PHARMACY</h1></a>
								</div>
							</td>
							<td  class="show">
								<div ><a href="book_snap/7.jpg" target="iif">
								<img src="book/pic/b4.png">	
									<h1>PHARMACOTHEARPY </h1></a>
							</td>
							<td  class="show" target="if">
								<div ><a href="book_snap/8.jpg" target="iif">
								<img src="book/pic/b5.png">	
									<h1>CLINICAL PHARMACY</h1></a>
								</div>
							</td>
						</tr>
					</table>
		</div>	
		
	
		<footer>
				<h1></h1>
		</footer>
		</div>
	</body>
	

</html>