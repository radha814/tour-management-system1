<!DOCTYPE html> <!-- THIS NEED TO BE DECLARE FOR HTML -->
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- THIS IS TITLE SECTION -->
		<title>RS TOURS LTD || Tour Agency</title>
		
		<!-- Company icon -->
		<link rel="icon" href=" https://media1.thehungryjpeg.com/thumbs2/ori_3807386_4rj1szjfzpfb6mm2byfhk36w76xy6z4vc61dn648_monogram-rs-logo-design.jpg">
		<link rel="icon" href="https://media1.thehungryjpeg.com/thumbs2/ori_3807386_4rj1szjfzpfb6mm2byfhk36w76xy6z4vc61dn648_monogram-rs-logo-design.jpg">
		
		<!-- Fontawsome sheet -->
		<link rel="stylesheet" href="css/all.css">
		
		<!-- style sheet -->
		<link rel="stylesheet" href="css/style.css">
		<style>
			[id*="-error"]{
				color:yellow;
				float:left;
				margin-top:-10px;
				
			}
			input{
				width: 45%;
				height: 30px;
				border: 2px;
				border-radius:20px;
				padding: 8px 15px 8px 15px;
				margin: 10px 0px 15px 0px;
				box-shadow: 1px 1px 2px 1px white;
			}
			input[type="text"]
				{
					background: transparent;
					border: none;
					text-align:center;
				}
			input::placeholder {
			  color: black;
			  text-align:center;
			  font-size: 1.2rem;
			  font-family:oswald;
			  font-weight: 500;
			}
		</style>
		<script rel="script" src="js/jquery-3.4.1.js"></script>
		<script rel="script" src="js/custom.js"></script>
	</head>
	<body>
			<!-- THIS IS HEADER TAG -->
		<header>
		<!-- Company Name and logo -->
		<div class="company">
		<img src="images/logo.png" alt="company name">
		<h2> RS TOURS LTD </h2>
		</div>
		<!-- This is menu part -->
		<nav id="main-menu">
			<div id="mobile-icon">
			<i class="fas fa-bars"></i>
			</div>
			<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#service">Services</a></li>
			
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="tourlist.php">Tour List</a></li>
                                                             <li><a href="book.php">Book Tour</a></li>
                                                             <li><a href="tour_history.php">Tour History</a></li>
			<li class="active"><a href="toursearch.php">Search & Importance</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="signup.php">SignUp</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="login.php">Login</a></li>
			</ul>
		</nav>
		</header>
<main>



<!--view table function start-->

<section id="viewtable2">
			<div class="container">
					<h6 style="color:#FFB600;">Available Tour Search</h6>
						<h1 style="color:white;">Search Your Desire Destination</h1><br>
					
					<center>
						<form method="POST">
							<input type="text" name="place" placeholder="Enter any place name where you want to go for vacation" onfocus="myFocus(this)"><br>
							<button class="btnsearch" type="submit" name="search">SEARCH</button>

						</form>
					</center><br><br>
					
					<h1 style="color:white;">Available Upcoming Tours</h1><br>
					
					<table class="paleBlueRows">
						<tr>
							<th>Place</th>
							<th>Duration</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Cost</th>
							<th>Booking Amount</th>
							<th>Booking Last Date</th>
							<th>Offer Amount</th>
							<th>Offer Date Till</th>
							<th>Transport</th>
						</tr>

			<!--database table view function start-->
			<?php

				$db_host = "localhost";
				$db_user = "root";
				$db_pass = "";
				$db_name = "phpdbms";
				
				//dbms connection build up
				$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
				
				
				/* For Checking Connection
				if($conn)
				{
					echo '<span style="color:green;text-align:center;">Database Connection Successfull!</span>'."<br>";
				}
				else
				{
					echo '<span style="color:red;text-align:center;">Database Connection failed!</span>'."<br>";
				} */
				
				if(isset($_POST['search']))
				{
					$place = $_POST['place'];
				
				$sql = "SELECT * FROM tour_details where place='$place'";
				$result = $conn-> query($sql);
				
				if ($result-> num_rows>0){
					while ($row = $result-> fetch_assoc()){
						echo 
						"<tr><td>". $row["place"]."</td><td>"
						.$row["duration"]."</td><td>"
						.$row["t_start_date"]."</td><td>"
						.$row["t_end_date"]."</td><td>"
						.$row["t_cost"]."</td><td>"
						.$row["b_amount"]."</td><td>"
						.$row["b_last_date"]."</td><td style='color:#006600 '>"
						.$row["o_cost"]."<td style='color:red'>"
						.$row["o_date_till"]."</td><td>"
						.$row["transport"]."</td></tr>";
					}
					echo "</table>";
				}
				else{
					echo "<span style='color:yellow;'>"."<font size='10'>"."No tour available for you "."<i class='far fa-frown fa-lg'></i>"."</span>"."<br><br>";
					$conn-> close();
				}
				}
				

			?>
			<!--database table view function end-->
			</table><br><br>			
					
			
					
			</div>
</section>


		
<?php include 'include/footer.php';?>