<?php 

error_reporting(-1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo  $pageTitle; ?></title>
	<link rel="stylesheet" href="css/style.css">
	
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@700&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/a924310984.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<?php 
						if (isset($_SESSION['user'])) {
						$loggedInUsername = htmlentities(ucfirst($_SESSION['user'])); 

						}
						 ?>
	<div class="logo">
		<a href="index.php" ><h1 class="logo-text"><span>MY</span>BLog</h1></a>
	</div>
	<i class="fas fa-bars menu-toggle"></i>

	<ul class="nav">
		<li><a href="index.php">Home</a></li>
		
		<li>
			<a href="#">
				
					 <i class="fas fa-user"></i>
					<?php echo 'Hi' .' '.substr($loggedInUsername,0,10) ; ?>
					<i class="fas fa-chevron-down"></i> 
		</a>
			<ul>
		<li><a href="dashboard.php">Dashboard</a></li>
		<li><a href="signout.php" class="logout">Sign Out</a></li>
			</ul>
		</li>
		
		
		

	
</header>

</body>
</html>