<?php
session_start();

$server = "localhost:3307";
$user = "root";
$pass = "";
$database = "gym_management";
$role = "";

$conn = mysqli_connect($server, $user, $pass, $database);

echo $_SESSION['username'];

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");

while ($row=mysqli_fetch_array($query)) {
	
$role = $row['role'];

}

if ($role == 'user') { ?>

<header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Fitness <span>Club</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="logout.php">Logout</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>

<?php } elseif($role == 'admin') { ?>

<header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Fitness <span>Club</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="#service">Services</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#price">Price</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#contact">Contact</a></li>
 	 			<li><a href="logout.php">Logout</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>

<?php } ?>

<header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="">Fitness <span>Club</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="#home">Home</a></li>
 	 			<li><a href="#service">Services</a></li>
 	 			<li><a href="#classes">Classes</a></li>
 	 			<li><a href="#price">Price</a></li>
 	 			<li><a href="#about">About</a></li>
 	 			<li><a href="#contact">Contact</a></li>
 	 			<li><a href="login.php">Login</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>

<?php } ?>		