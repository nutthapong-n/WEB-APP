<head>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<body>
	<nav class="navbar navbar-inverse">
		<ul class="nav navbar-nav">
			<li><a href="#myShop">welcome to <strong>MY SHOP</strong></a></li>
			<li style="float: right;"><a  href="index.php?press=logout">Logout</a></li>
			<li style="float: right;"><a ><?php echo $_SESSION["member"]; ?></a></li>
		</ul>

	</nav>

	<nav class="navbar navbar-inverse navbar-fixed-bottom" >
		<ul class="nav navbar-nav">
			<!-- <footer class="footer" > -->
			<li class="footer"><a href="#detail">Best Shopping Production, Tel 0981111111</a></li>
			<li class ="footer"><a href="mailto:first927@live.com" >Email: first927@live.com</a></li>
			<!-- </footer > -->
		</ul>
	</nav>


<!-- 	<div id="footer">
  <div class="container">
    <p>&nbsp;</p>
    <p class="lead">This Bootstrap layout was made @<a href="">Bootply.com</a></p>
  </div>
</div> -->
</body>
<?php
include "/Style_sheets/FootAndHead_CSS.php";
?>