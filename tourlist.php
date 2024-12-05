<!DOCTYPE html> <!-- THIS NEED TO BE DECLARE FOR HTML -->
<html>

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- THIS IS TITLE SECTION -->
		<title>RS TOURS LTD || Tour Agency</title>
		
		<!-- Company icon -->
		<link rel="icon" href="images/logo.png">
		<link rel="icon" href="images/favicon.ico" type="images/x-icon">
		
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
			<li  class="active"><a href="tourlist.php">Tour List</a></li>
                                                             <li><a href="book.php">Book Tour</a></li>
                                                             <li><a href="tour_history.php">Tour History</a></li>
			<li><a href="toursearch.php">Search & Importance</a></li>
			<li><a href="contactus.php">Contact Us</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="signup.php">SignUp</a></li>
			<li><a class="btn" style="border-radius: 5px;" href="login.php">Login</a></li>
			</ul>
		</nav>
		</header>
<main>
		
<!--view table function start-->

<section id="viewtable">
			<div class="container">
					<h6 style="color:#FFB600;">Upcoming</h6>
						<h1 style="color:white;">Tour Schedules</h1><br>
					
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
				
				
				$sql = "SELECT place, duration, t_start_date, t_end_date, t_cost, b_amount, b_last_date, o_cost, o_date_till, transport from tour_details";
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
						.$row["b_last_date"]."</td><td style='color: 	#006600 '>"
						.$row["o_cost"]."<td style='color:red'>"
						.$row["o_date_till"]."</td><td>"
						.$row["transport"]."</td></tr>";

                                                                                                                        
					}
					echo "</table>";
				}
				else{
					$conn-> close();
				}
				

			?>
			<!--database table view function end-->
			</table><br><br>			
					
			
					<h6 style="color:#FFB600;">Finished</h6>
						<h1 style="color:white;">Last Tours</h1><br>
					
					<table class="paleBlueRows">
						<tr>
							<th>Place</th>
							<th>Duration</th>
							<th>Start Date</th>
							<th>End Date</th>
							<th>Cost</th>
							<th>Transport</th>
                                                                                                                                               

						</tr>
						<tr>
                                                                                                                                               
							<td>Nagpur</td>
							<td>3days</td>
							<td>2019-01-03</td>
							<td>2019-01-06</td>
							<td>7900</td>
							<td>Bus</td>
                                                                                                                                               
						</tr>
						<tr>
							<td>Budhapest</td>
							<td>7days</td>
							<td>2019-01-15</td>
							<td>2019-01-18</td>
							<td>10000</td>
							<td>Flight</td>
                                                                                                                                               
						</tr>
						<tr>
							<td>Udaipur</td>
							<td>3days</td>
							<td>2019-02-21</td>
							<td>2019-02-23</td>
							<td>5300</td>
							<td>Train</td>
						</tr>
						
						<tr>
							<td>France</td>
							<td>4days</td>
							<td>2019-04-25</td>
							<td>2019-04-29</td>
							<td>5900</td>
							<td>Flight</td>
						</tr>
						<tr>
							<td>Vaishnav Devi</td>
							<td>7day</td>
							<td>2019-05-02</td>
							<td>2019-05-04</td>
							<td>5500</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Sundarban</td>
							<td>2days</td>
							<td>2019-05-19</td>
							<td>2019-05-21</td>
							<td>4700</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Italy</td>
							<td>7days</td>
							<td>2019-06-15</td>
							<td>2019-06-18</td>
							<td>10000</td>
							<td>Flight</td>
						</tr>
						<tr>
							<td>Bali</td>
							<td>2days</td>
							<td>2019-07-22</td>
							<td>2019-07-24</td>
							<td>4900</td>
							<td>Bus</td>
						</tr>
						<tr>
							<td>Bangkok</td>
							<td>7days</td>
							<td>2019-08-07</td>
							<td>2019-08-10</td>
							<td>10000</td>
							<td>Flight</td>
						</tr>
						<tr>
							<td>Mathura</td>
							<td>4days</td>
							<td>2019-09-23</td>
							<td>2019-09-27</td>
							<td>4600</td>
							<td>Train</td>

						</tr>
					</table>><br><br>
			</div>
</section>



					</div>
			</div>
		</section>

	
<?php include 'include/footer.php';?>