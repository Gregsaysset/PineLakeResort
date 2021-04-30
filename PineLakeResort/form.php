<?php 
//list of receive info
$fname = $_POST["FirstName"];
$lname = $_POST["LastName"];
$email = $_POST["Email"];
$phone = $_POST["Phone"];
$arrival = $_POST["Arrival"];
$nights = $_POST["Nights"];
$comments = $_POST["Comments"];

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Pine Lake Resort</title>
	<link rel="stylesheet" type="text/css" href="resort.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,300;1,700&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<h1><a href="index.html"> Pine Lake Resort</a></h1>
	</header>
	
	<nav>
		<ul>
			<li><a href="index.html"> Home</li></a>
			<li><a href="cabin.html"> Cabins</li></a>
			<li><a href="dining.html"> Dining</li></a>
			<li><a href="spa.html"> Spa</li></a>
			<li><a href="wedding.html">Wedding</li></a>
			<li><a href="activities.html"> Activities</li></a>
			<li><a href="reservations.html"> Reservations</li></a>	
		</ul>
	</nav>
	

  <!-- Full-width images with number and caption text -->
  <div>
      
    <img class="mainpic" src="image/hotel.jpg" style="width:100%" >

   
  </div>

	
<main>
    <div class="pictext">
    <h2>Thank You for your reservation</h2>
	
	



	
	<?php
	 echo"<h2> You have entered the following information:</h2>";
   	 echo"<CENTER> 
               First Name: $fname<br><br>
               Last Name: $lname<br><br>
	           Email: $email<br><br>     
	           Phone: $phone<br><br>
               Arrival date: $arrival<br><br>
               Number of Nights: $nights<br><br>
	           Comments: $comments</CENTER>"; //retrieved info




 ?>

	</main>
	<footer>
		<p>9772 Pine Ridge Road, PineLake,CO<br>
			Email: <a href="mailto:Info@pineridge.com">Info@pineridge.com</a><br>
			Call Us: <a href="888-259-5959">888-259-5959</a></p>

		<p>Copyright &copy; 2020 Pine Lake Resort<br>
	Gregory Saysset</p>
	</footer>
</body>



</body>
</html> 

</html>