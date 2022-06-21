<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

//Register

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);

  if ($password == $cpassword) {
    
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {

      $sql = "INSERT INTO users (role, username, email, password)
          VALUES ('user','$username', '$email', '$password')";
      $result = mysqli_query($conn, $sql);

      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
      } else {
        echo "<script>alert('Oops! Something Wrong Went.')</script>";
      }
    } else {
      echo "<script>alert('Oops! Email Already Exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
}

//Login

if (isset($_POST['login'])) {
  $email_login = $_POST['email_login'];
  $pass_login = md5($_POST['pass_login']);

  $sql = "SELECT * FROM users WHERE email='$email_login' AND password='$pass_login'";
  $result = mysqli_query($conn, $sql);
  if ($result->num_rows > 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $row['username'];
    header("Location: index.php");
  } else {
    echo "<script>alert('Oops! Email or Password is Wrong.')</script>";
  }
}

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");

while ($row=mysqli_fetch_array($query)) {
  
$role = $row['role'];

$id= $row['id'];

echo "<script>alert('$id')</script>";

}

if ($role == 'user') { 
  header("Location: user.php");

} elseif($role == 'admin') { 
  header("Location: admin.php");

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>GYM Website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script type="text/javascript" src="js/card.js"></script>
  <script src="js/wow.min.js"></script>

<style>
	.wow:first-child {
    	visibility: hidden;
    }
</style>

</head>
<body style="background: radial-gradient(#fff,#ffd6d6)">

<!--Nav Bar-->
<header>
 	 <div class="container">
 	 	<div class="logo">
 	 		 <a href="index.html">Fitness <span>Club</span></a>
 	 	</div>
 	 	<a href="javascript:void(0)" class="ham-burger">
 	       <span></span>	
 	       <span></span>
 	 	</a>
 	 	<div class="nav">
 	 		<ul>
 	 			<li><a href="index.php">Home</a></li>
 	 			<li><a href="#">Signup</a></li>
 	 		</ul>
 	 	</div>
 	 </div>
 </header>	
<!--Nav Bar End-->

<section class="account-page">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="image/schedule1.png" width="400px" height="400px">
      </div>
      <div class="col-lg-6">
        <div class="form-container">
          <div class="form-btn">
            <span onclick="login()">Login</span>
            <span onclick="register()">Register</span> 
            <hr id="Indicator"> 
          </div>
          <form action="" method="POST" id="LoginForm">
            <input type="email" name="email_login" placeholder="Email" value="<?php echo $email_login; ?>" required>
            <input type="password" name="pass_login" placeholder="Password" value="<?php echo $pass_login; ?>" required>
            <button type="submit" name="login" class="btn">Login</button>
            <a href="">Forget Password</a>
          </form>

          <form action="" method="POST" id="RegForm">      
            <input type="text" name="username" placeholder="Username" value="<?php echo $username; ?>" required>
            <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>" required>
            <input type="password" name="password" placeholder="Password" value="<?php echo $_POST['password'] ?>" required>
            <input type="password" name="cpassword" placeholder="Confirm Password" value="<?php echo $_POST['cpassword'] ?>" required>
            <button type="submit" name="submit" class="btn">Register</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>


<!--*********** js for toggle form **********-->

<script>
  
  var LoginForm = document.getElementById("LoginForm");
  var RegForm = document.getElementById("RegForm");
  var Indicator = document.getElementById("Indicator");

  function register(){
    RegForm.style.transform = "translateX(0px)";
    LoginForm.style.transform = "translateX(0px)";
    Indicator.style.transform = "translateX(100px)";
  }

  function login(){
    RegForm.style.transform = "translateX(300px)";
    LoginForm.style.transform = "translateX(300px)";
    Indicator.style.transform = "translateX(0px)";
  }

</script>


<!--******** Jquery ********-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){

      $(".ham-burger, .nav ul li a").click(function(){
       
        $(".nav").toggleClass("open")

        $(".ham-burger").toggleClass("active");
      })      
      $(".accordian-container").click(function(){
      	$(".accordian-container").children(".body").slideUp();
      	$(".accordian-container").removeClass("active")
      	$(".accordian-container").children(".head").children("span").removeClass("fa-angle-down").addClass("fa-angle-up")
      	$(this).children(".body").slideDown();
      	$(this).addClass("active")
      	$(this).children(".head").children("span").removeClass("fa-angle-up").addClass("fa-angle-down")
      })

       $(".nav ul li a, .go-down").click(function(event){
         if(this.hash !== ""){

              event.preventDefault();

              var hash=this.hash; 

              $('html,body').animate({
                scrollTop:$(hash).offset().top
              },800 , function(){
                 window.location.hash=hash;
              });

              // add active class in navigation
              $(".nav ul li a").removeClass("active")
              $(this).addClass("active")
         }
      })
})

</script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       0,
      }
    );
    wow.init();
</script>
<script>
	  VanillaTilt.init(document.querySelectorAll(".card"),{
		max: 25,
		speed: 400,
		glare: true,
		"max-glare": 0.5,
	});
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>