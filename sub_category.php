<!doctype html>
<html>
<head>
<link rel="stylesheet" href="css/style_new.css" />
<link rel="icon" href="images/logo.png" />
<title>My Site</title>
</head>

<body>
<div>
	<div class="top" >
		<img src="images/logo.png" />
		
		<div>
			<?php
				session_start();
				if(isset($_SESSION["email"]))
				{
					echo "<a href='cart.php'>LOGOUT</a>";
					echo "  ";
					echo "<a href='login.php'>VIEW-CART</a>";
				}
				
				else
				{
					echo '<a href="register.php">REGISTER</a>';
					echo "|";
					echo '<a href="login.php">LOGIN</a>';	
				}
			?>
		</div>
	</div>
	
	<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="recommend.php">Recommendations</a></li>
		<li><a href= "more.php">More</a></li>
	</ul> 
	
	</div>

	
	<div class="banner">
		<img src="images/banner.png" />
		
	</div>
	
	<div class="product" >
		
        	<?php
					$id=$_GET["cid"];
					$con=mysqli_connect("localhost","root","","hilloni");
					$x=mysqli_query($con,"select * from sub_category where cid=$id ");	
				
				while($y=mysqli_fetch_array($x,MYSQL_ASSOC))
				{
			//		echo "print_r($y)";
					$scid=$y["scid"];
					echo "<a href='product.php?scid=$scid' >";
					echo "<div>";
					echo "<div class='img'>";
					$img=$y["image"];
					echo "<img src='images/$img' /><br>";
					echo $y["subcat_name"]."<br>";
					echo "</div>";	
					echo "</div>";
					echo "</a>";
				}			
			?>
        

		
	</div>
	
	<div class="bottom">
		&copy; Copyright 2017-18
	</div>
	
	
</div>

</body>
</html>















