<?php 

include 'config.php';

error_reporting(0);

session_start();

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");

while ($row=mysqli_fetch_array($query)) {
  
$role = $row['role'];

$id= $row['id'];

echo "<script>alert('$id')</script>";

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
<body>

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
        <li>
          <div class="user-name">
            Hi, <?php echo $_SESSION['username']; ?>
          </div>
        </li>
        <li><a href="#home">Dashboard</a></li>
        <li><a href="#home">Users Registered</a></li>        
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
   </div>
 </header>

<!-- Carousel Slider/ Home Start -->

<div id="home">
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/head1.jpg" style="width:100%; height: 550px">
      <div class="carousel-caption">
        <h3>Hello Admin</h3>
        <p>Stay fit and fine admin.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/head2.jpg" style="width:100%; height: 550px">
      <div class="carousel-caption">
        <h3>Welcome back admin </h3>
       <p>Hope you are doing a proper excercise with the managing this gym.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/head3.jpg" style="width:100%; height: 550px">
      <div class="carousel-caption">
        <h3>Hope you are fit and fine admin</h3>
        <p>Stay fit and hope you are taking care of your health and in your diet.</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>

<!-- Carousel Slider/ Home End -->

<!-- Services Start -->

<section class="service" id="service">
  <div class="container">
    <h2 class="head_title">Services</h2>
     <div class="content">
        <div class="text box wow slideInLeft">                  
                  <p>In our gym we provide the proper facilities of what customer wants.</p>
                   <p>we provide a better solution for fitness exercise as per your body and proper diet</p>
                  <p> We provide a personal Trainer for our customer to get in the perfect shape. Our Trainer help you to get in touch with any possible solution rlated gym, diet, exercise etc. we help to give you a proper diet so you can get in the shape fat to fit. </p>
                  <a href="" class="btn">Start Now</a>
        </div>
        <div class="accordian box wow slideInRight">
              <div class="accordian-container active">
                <div class="head">
                  <h4>Cardiovascular Equipment</h4>
                  <span class="fa fa-angle-down"></span>
                </div>
                <div class="body">
                  <p>In our gym we have the cardio equipment. The equipment help you to get fit and  we properly measure your body temperature, spo2 so then we plan your exercise according to your fitness level. </p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Strength Training Equipment</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>We have proper  free weights for exsercise, an exercise mat that helps you in warm up exercise, resistance band which helps you in stretching grow or tone your body muscle. Dumbbells and kettlebles helps  you in weight training and easily you can do and grow your muscle. we have the weight body bars which helps you to push your limits and add some weights and do your exercise.  </p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Group Fitness Class</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                    <p>In this we gives you a group exercise classes once or twice in  a week as per requirements. 
                  in thia we train you for doing yoga, stretching exercises, group discussion to gain more knowledge, some normal exercise and not a weight training.</p>
                  <p> This exerxise is not for everyone this is some extra activities so if you have to do this activity you will have a personal training plan to do this. We hope you will understand this. </p>
                </div>
              </div>
              <div class="accordian-container">
                <div class="head">
                  <h4>Other Services</h4>
                  <span class="fa fa-angle-up"></span>
                </div>
                <div class="body">
                  <p>1) we have the bench equipment for some parts of body workouts. we have chest press machine which you can use that machine to train your other parts. we have cable row machine which is multi functional which help you to some of your body parts.  we provide a user protein suppliments if customer wants. we provide some mentor to you. </p>
                  <p> 2) if any body wants so that they can get proper information about your body exercise your diet, body weight gain Etc. information regarding your body and helps to give you proper exercise and if we see some chnages then we help you to add more exercise.</p> 
                  <p>3) For personal trainer customer we do some extra training session, group discussion with exercises once in a week so P.T. customer should present for this we plan a particular day for this type of session.</p>
              </div>
        </div>
     </div>
  </div>
 </section>

<!-- Services End -->

<!-- Classes Start -->

<section class="classes" id="classes">
  <div class="container">    
    <h2 class="head_title">Our Classes</h2>
     <div class="content">
        <div class="box img wow slideInLeft">
           <img src="image/classes1.png" alt="classes" />
        </div>
        <div class="box text wow slideInRight">
            <p>we have the timing for classes and in afternoon we don't have the gym open. we have schedule a gym timing for customers so that they can tarin in a particular time because if you train in a peoper time so you can train your body parts easily and maintain your exercise. </p>
          <div class="class-items">
           <div class="item wow bounceInUp">
                     <div class="item-img">
                       <img src="image/stretching.jpg" alt="classes" />
                      
                     </div>
                     <div class="item-text">
                        <h4>Stretching Training</h4>
                        <p>we will give you the stretching exercise so that you can do that your stretching exercise before going to lift or do your weight gain exercise.   </p>

                     </div>
           </div>
           <div class="item wow bounceInUp">
                      <div class="item-text">
                        <h4>Weight Training</h4>
                        <p>After your Stretching exercise you can move to weight gain training and we have dumbbells, kettle bell equipment we have weight train machine to train your body parts.</p>
                        <p> we helps you to get a proper weight according to your exercise so you can get more repetition and sufficient body weight so to get more repetition.</p>

                         </div>
                     <div class="item-img">
                       <img src="image/ourclasses.jpg" alt="classes" />
                       
                     </div>
           </div>
          </div>
        </div>
     </div>
  </div>
</section>
                   

<!-- Classes End -->

<!-- Classes Schedule Start -->

<section class="schedule" id="schedule">
     <div class="container">
      <h2 class="head_title">Classes Schedule</h2>
        <div class="content">
             <div class="box text wow slideInLeft">
                 <p>
                   We have planned a class schedule for you so that you can maintain a consistency in your workout. You can do workout in any time thier is no restriction for time limit like you have to do only 1 hour time limit for workout. we have done a time period for our ladies customer 10-11.30 AM we have a ladies special timing in that period we only allow our ladies customer. Hope you understand.   
                 </p>
                 <img src= "image/class2.png"alt="schedule" />
             </div>
             <div class="box timing wow slideInRight">
                   <table class="table">
                     <tbody>
                    <tr>
                        <td class="day">Monday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>In this time period anybody can  workout.<br/> <strong>6:00 to 10:00 AM</strong>
                        <p>Ladies special timing <strong>10:00-11:30 AM</strong></p></td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Tuesday</td>
                        <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>In this time period anybody can workout.<br/> <strong>6:00 to 10:00 AM</strong>
                        <p>Ladies special timing <strong>10:00-11:30 AM</strong></p></td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                     
                      </tr>
                      <tr>
                        <td class="day">Wednesday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>In this time period anybody can  workout.<br/> <strong>6:00 to 10:00 AM</strong>
                        <p>Ladies special timing <strong>10:00-11:30 AM</strong></p></td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Thursday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>In this time period anybody can  workout.<br/> <strong>6:00 to 10:00 AM</strong>
                        <p>Ladies special timing <strong>10:00-11:30 AM</strong></p></td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Friday</td>
                        <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>In this time period anybody can  workout.<br/> <strong>6:00 to 10:00 AM</strong>
                        <p>Ladies special timing <strong>10:00-11:30 AM</strong></p></td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Saturday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>In this time period anybody can  workout.<br/> <strong>6:00 to 10:00 AM</strong>
                        <p>Ladies special timing <strong>10:00-11:30 AM</strong></p></td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                       <tr>
                        <td class="day">Sunday</td>
                        <td><strong>Opening Time 8:00 AM</strong></td>
                        <td>In this time period we have planned a special Group fitness class for our Personal Trainer Customer. Great Session with yoga and other activities. <br/> </td>
                        <td> <strong>For rest of our customer sunday is the rest day.</strong>  </td>
                      </tr>
                     </tbody>
                   </table>
             </div>
        </div>
     </div>
  </section>

<!-- Classes Schedule End -->

<!-- Price Start -->

<div class="container package-h2" id="price">
      <h2>Choose Your Package</h2>
      <p class="title-p"><Strong> We have Three different types pf plans for U. You can choose any plan which suits you. </Strong> </p>
      <p class="title-p"><strong> You can scroll your cursor to the box and that will highlights about price.</strong> </p>
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
      <div class="content">
      <h2>01</h2>
      <h3>Rs.1000/Month</h3>
      <P>This price is without personal Trainer</P>
          <p>Month to Month membership</p>
          <p>No Time Restrictions</p>
          <p>Gym and Cardio</p>
      <p>Service Room for storing stuffs</p>
      <p>You can get a personal trainer by adding more 1000 RS.</p>
      <a href="login.php">Join Now</a>   
    </div>
  </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
    <div class="content">
      <h2>02</h2>
      <h3>Rs5000/6 Months</h3>
      <P>This price is without personal Trainer</P>
          <p>6 months membership </p>
          <p>No Time Restrictions</p>
          <p>Gym and Cardio</p>
      <p>Service Room for storing stuffs</p>
      <p>You can get a personal trainer by adding more 2500 RS.</p>
      <a href="login.php">Join Now</a>   
    </div>
  </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card">
    <div class="content">
      <h2>03</h2>
      <h3>Rs.9000/Year</h3>
      <P>This price is without personal Trainer</P>
          <p>1 year membership</p>
          <p>No Time Restrictions</p>
          <p>Gym and Cardio</p>
      <p>Service Room for storing stuffs</p>
      <p>You can get a personal trainer by adding more 4000 RS.</p>
      <a href="login.php">Join Now</a>   
    </div>
  </div>
    </div>
  </div>
</div>

<!-- Price End -->

<!-- About Start -->


<section class="about" id="about">
      <div class="container">
        <h2 class="head_title">About Us</h2>
          <div class="content">
               <div class="box wow bounceInUp">
                   <div class="inner">
                       <div class="img">
                          <img src="image/about1.jpg" alt="about" />
                       </div>
                       <div class="text">
                           <h4>Free Consultation</h4>
                           <p>When you visit our site and if you are interesting to know more about our gym than we provide a tour of our gym. </p>
                           <p>If you get interested and you want to join our gym so then we provide a free consultation for you how to manage your excersise, workouts, diet, meditation etc. that consulatation will be provided by us at free of cost.</p>
                           <p> Our gym trainer is freely availablefor your service or for any consulatancy you cn contact any time to get solution of your query. 
                           </p>
                       </div>
                   </div>
               </div>
                <div class="box wow bounceInUp" data-wow-delay="0.2s">
                   <div class="inner">
                       <div class="img">
                          <img src="image/about2.jpg" alt="about" />
                       </div>
                       <div class="text">
                           <h4>Best Training</h4>
                           <p>In our gym we have tried to give you full options to workout. You just need to focus on your goals and achieve success. We tried to give you a music system which used to give some motivation to focus in your workout.</p>
                           <p>We have manage to fit as many as possible equipment in gym so that you can do maximum body parts excercise easily.</p>
                           <p> The trainer will help to get to know more about the eqiupment and how you can properly do your excercise in perfect shape. </p>
                           <p>   

                               </p>
                       </div>
                   </div>
               </div>
               <div class="box wow bounceInUp" data-wow-delay="0.4s">
                   <div class="inner">
                       <div class="img">
                          <img src="image/about3.jpg" alt="about" />
                       </div>
                       <div class="text">
                           <h4>Build Perfect Body</h4>
                           <p>You can build a imaginary a perfect body as you have seen in your dreams but for that you have to work hard to achieve that.</p>
                           <p> You can't build a perfect body but you can build a slightly perfect body for you to get motivated and for that body you have to proper diet and add some protein in your diet.</p>
                           <p>The Diet is the main part to get fit. Only excercise will not help to get a perfect body the diet is the main factor and the proper amount of protein and other fiber needs to be proper.</p>
                       </div>
                   </div>
               </div>
          </div>
      </div>
  </section>

<!-- About End -->

<!-- Contact Start -->

<section class="contact" id="contact">
     <div class="container">
        <div class="content">
            <div class="box form wow slideInLeft">
               <form>
                  <input type="text" placeholder="Enter Name">
                  <input type="text" placeholder="Enter Email">
                  <input type="text" placeholder="Enter Mobile">
                  <textarea placeholder="Enter Message"></textarea>
                  <button type="submit">Send Message</button>
               </form>
            </div>
            <div class="box text wow slideInRight">
                 <h2>Get Connected with Gym</h2>
                  <p class="title-p"> This section will help you to get connected with us. This is the simplest form to connect and contact us easily.
                   Here you send your name and other information to get contact back from us.
                   This will also help to give you a infromation of our social media handle and mail id which help you to easily contact us and connect with us.</p>
                  <div class="info">
                      <ul>
                          <li><span class="fa fa-map-marker"></span>Ghatkopar</li>
                          <li><span class="fa fa-phone"></span> +91 9167242143</li>
                          <li><span class="fa fa-envelope"></span> aakashchaurasiya07@gmail.com</li>
                      </ul>
                  </div>
                  <div class="social">
                       <a href="https://www.facebook.com/" target="_Blank"><span class="fa fa-facebook"></span></a>
                       <a href="https://www.instagram.com/" target="_Blank"><span class="fa fa-instagram"></span></a>


                  </div>
                  <div class="copy">
                      Designed By &copy; Aakash Chaurasiya
                  </div>
            </div>
        </div>
     </div>
  </section>

<!-- Contact End -->

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
  <style>

</body>
</html>