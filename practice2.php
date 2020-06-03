
<!DOCTYPE html>
<html>
<head>
  <title>Settings | Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="bootstrap-3.3.7-dist\css\bootstrap.min.css">
  <script type="text/javascript" src="bootstrap-3.3.7-dist\js\jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap-3.3.7-dist\js\bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css\style.css">
  <style>
  	#btn{
  		background-color: black;

  	}
  </style>  
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="index.php">Lifestyle Store</a>
			</div>
			<div class="collapse navbar-collapse" id="mynav"> 
				<ul class="nav navbar-nav navbar-right">
					<?php
                            if(isset($_SESSION['Email'])){
                                ?>
                        <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="settings.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                        ?>
                        <?php
                            } else {
                            ?>
                        <li><a href="#" data-target="#mymodal" data-toggle="modal" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><button class=" btn-default" data-target="#mymodal" data-toggle="modal" ><span class="glyphicon glyphicon-log-in"></span> Login</button></li>
                            <?php
                            }
					?>
				</ul>
			</div>			
		</div>
	</nav>
	<?php include'login1.php' ?>

	
</body>
</html>

