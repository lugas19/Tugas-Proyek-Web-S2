<!DOCTYPE html>
<html>
<head>
	<title>Web Lugas</title>
	<link rel="stylesheet" type="text/css" href="style-login.css">
</head>
<body>

<!-- DIV MENU ATAS -->
<div class="menu-atas">
		<ul>
			<li class="one-menu"><a href="index.php">Menu</a></li>
			<li><a href="item.php">Item</a></li>
			<li><a aling="center" href="bayar.php" class="btn btn-primary btn-lg">Bayar</a></li>
			<li><a href="contact.php">Contact</a></li>
		</ul>
</div><!-- akhir div.menu atas -->

<div class="clear"></div>
<!-- DIV CONTAINER -->
<div class="container">
	<!-- DIV LOGIN -->
	<div class="login">
		<!-- Masukan Form ke div login yang ada di div container [METODE POST] -->
		<form method="post" action="bayar.php">
		
				<div class="username">
					<label for="username">Username</label>
					<input type="text" name="username">
				</div>

				<br><br>

				<div class="password">
					<label>Password</label>
					<input type="password" name="password">
				</div>
				<br><br>
				<button type="submit" name="submit">Submit</button>
				
				<div class="logout">
					<a href="logout.php">Logout</a>
				</div>
			
		</form><!-- akhir dari form login -->

	</div><!-- akhir div login -->

</div><!-- akhir div container -->
<div class="footer">
	<h1 id="footer">Lugas Web Desain</h1>
</div>

<script type="text/javascript" src="script-login.js"></script><!-- JavaScript -->
</body>
</html>

