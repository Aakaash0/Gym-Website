<?php 

include 'config.php';

error_reporting(0);

session_start();

$query = mysqli_query($conn,"SELECT * FROM users WHERE username='".$_SESSION['username']."'");

while ($row=mysqli_fetch_array($query)) {
  
$role = $row['role'];
$username = $row['username'];
$id= $row['id'];

//echo "<script>alert('$username $role $id')</script>";

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
        <li><a href="#home">Home</a></li>
        <li><a href="#workout">Workout Plan</a></li>
        <li><a href="#diet">Diet Plan</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
   </div>
 </header>

<!-- Carousel Slider/ Home Start -->

<div id="home">
<div id="demo" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/head1.jpg" style="width:100%; height: 550px">
      <div class="carousel-caption">
        <h3>Hello Users!</h3>
        <p>Hope you will get a proper body as you have imagine.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/head2.jpg" style="width:100%; height: 550px">
      <div class="carousel-caption">
        <h3>Welcome user to our gym </h3>
       <p> You can find a peoper workout plan according to your body. We tried to give you a better workout plan.</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/head3.jpg" style="width:100%; height: 550px">
      <div class="carousel-caption">
        <h3>Hey User! Are U Ready for excercise and for Diet.</h3>
       <p>We have tried to give you a diet for u. You can choose which type of diet you want.</p>
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

<!-- Workout Plan Start -->

<section class="Services" id="workout">
  <div class="container">
    <h2 class="head_title">Workout Plan</h2>
    <div class="row">
      <div class="content">        
            <div class="box timing wow slideInRight">
              <div class="col-lg-6 col-sm-12 col-xs-12">
                <div class="accordian box wow slideInLeft">                  
                   <table class="table">
                     <tbody>
                      <tr>
                        <td class="day">Monday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td> <strong>Chest Day</strong> <br/> 
                        <p> Do Flat Barbell Bench Press 3 sets of 10</p>
                        <p>Incline DB Press 3 of 10</p>
                        <p> Machine chest 3 of 10</p>
                        <p>25 pushups</p>
                      </td>

                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                        
                      </tr>
                      <tr>
                        <td class="day">Tuesday</td>
                        <td><strong>Opening Time 6:00 AM</strong></td>
                        <td>  <strong>Back Day</strong></br>
                        <p> Seated Cabel row 3 sets of 10</p>
                        <p> Seated Lat pull down 3 of 10</p>
                        <p> Machine row 3 of 10</p>
                        <p> 20 Bent over Dummbell rows for a time  each arm.</p>
                        <p> Shrugs 3 of 10</p>
                      </td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                     
                      </tr>
                      <tr>
                        <td class="day">Wednesday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td> <strong>Shoulder Day</strong></br>
                        <p> Seated DB millitary press 3 sets of 10 </p>
                        <p> Seated DB fly 3 of 10 </p>
                        <p>Seated DB front raises 3 of 10 </p>
                        <p> Lateral raises 3 of 10</p>

                      </td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Thursday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td><strong>Triceps & Abs Day</strong></br>
                        <p> One arm overhead Extension 3 Sets of 10 </p>
                        <p> Cabel ropes teiceps push down 3 of 10</p>
                        <p>Lying triceps extension 3 of 10</p>
                        <p>Diamond Pushups 2 of 12-15</p>
                        <p> Crunches 20 Reps Than Bicycle crunches 12 reps</p>
                        <p>Russian twist 10 reps than Hanging knee raises 12 reps</p>
                        <p> Plank for 1 minute</p>


                      </td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Friday</td>
                        <td><strong>Opening Time 6:00 AM</strong></td>
                        <td> <strong>Biceps Day</strong></br>
                        <p> Dumbbell Curls 3 sets of 15</p>
                        <p> Hammer Curl 3 of 15</p>
                        <p>Preacher Curl 3 of 10</p>
                        <p> Cabel Bar Curl 3 of 15</p>
                        <p> Concentration Curl 3 of 10</p>
                        <p>Barbell Curl 3 of 12</p>

                      </td>
                        <td> For Evening Timing<strong>06:00-10:30 PM</strong></td>
                      </tr>
                      <tr>
                        <td class="day">Saturday</td>
                         <td><strong>Opening Time 6:00 AM</strong></td>
                        <td> <strong>Legs Day</strong></br>
                        <p> Normal Squats 2 Sets of 25</p>
                        <p> Barbell Squats 4 Sets of 8-10</p>
                        <p>Dumbbell Lunges 2 sets of 10</p>
                        <p> Leg Press 3 sets of 10-12</p>
                        <p> Leg Extension 3 sets of 10</p>
                        <p> Leg Curl 3 sets of 8-10</p>
                        <p> Sumo Squats and Kettlebell Squats 3 sets of 15</p>
                        <p>Calf Raises 2 sets of 20</p>

                      </td>
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

      </div>
    </div>
  </div>
</section>

<!-- Workout Plan End -->

<!-- Diet Plan start -->

<section class="service" id="diet">
  <div class="container">
    <h2 class="head_title">Diet Plan</h2>
     <div class="content">
        <div class="text box wow slideInLeft">                  
          <div class="card" style="width: 22rem; height: 450px">
            <img class="card-img-top" src="image/img2.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fix Plan</h5>
              <p class="card-text">We have made a special diet plan according to your exercise this diet plan will get update according to your exerise.</p>
              
            </div>
          </div>
        </div>

        <div class="accordian text box wow slideInRight">
              <div class="card" style="width: 22rem; height: 450px">
            <img class="card-img-top" src="image/die.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Fix Plan</h5>
              <p class="card-text"> This is the another plan for our ladies customer.
              Here we have made a diet plan for ladies users.</p>
              
            </div>
          </div>
        </div>
     </div>
  </div>

     <div class="diet container">
      <h2 class="head_title">Diet Plans</h2>
        <div class="content">
             <div class="box timing wow slideInLeft">
              <center>
                <h3 class="">Weight Loss Workout Plan </h3>
              </center>
              <table class="table">
                     <tbody>
                      <tr>
                        <td class="day"> Monday</td>
                         <td>For Breakfast Oatmeal or fresh food or tea or coffee with little milk.</td>
                        <td> For Lunch 2 cups of Mixed Greens with 1 cup of other veggies,chopped, Dessert.
                        <p><strong><font color="#FFFF00"> For Snack </strong> no sugar added yougurt with berries swirled throught or 1 apple. </p></td>
                        <td>Dinner Salad, Salmon with sweet chilli sauce. <p><font color="#00FFFF"> For Dessert Mixed Berries.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Tuesday</td>
                        <td>For Breakfast Egg White Omelet.</td>
                        <td>For Lunch Big Bowl of Salad and A turkish Sandwich.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Pear, Popcorn air free and microwave.</p>
                        </td>
                        <td>Dinner Veggie Burger on a Whole-Wheat Bun with Roasted Red Bell Pappers, Steamed fresh Vegetables.<p><font color="#00FFFF"> For Dessert Fresh Berries.</p></td>
                      </tr>
                      <tr>

                        <td class="day">Wednesday</td>
                          <td>For Breakfast Multigrain Toast and skim mixed Yougurt.</td>
                        <td>For Lunch Mixed Salad, Skimmed Milk Paneer with green chutney.
                        <p><strong><font color="#FFFF00"> For Snack </strong> 1 Banana and Buttermilk.</p>
                        </td>
                        <td>Dinner 1 Bowl Methi rice and some Lentil Curry and mixes salad. <p><font color="#00FFFF"> For Dessert Frozen Yogurt.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Thursday</td>
                          <td>For Breakfast Fruit and Nuts Yougurt</td>
                        <td>For Lunch Moong Daal, Bhindi Sabzi and Roti.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Oranges Or Sweet Potato.</p>
                        </td>
                        <td>Dinner Steamed Rice With Palak Chole.<p><font color="#00FFFF"> For Dessert Berry Mousse.</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="day">Friday</td>
                         <td>For Breakfast Skimmed Milk and Peas Poha.</td>
                        <td>For Lunch Missi roti with low fat Paneer Cury.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> 1 Papaya.</p>
                        </td>
                        <td>Dinner Roti, Curd, aloo baigan and Salad.<p><font color="#00FFFF"> For Dessert Fruit Smoothie.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Saturday</td>
                         <td>For Breakfast cucumber for detox and after 1hr Idli With Sambar.</td>
                        <td>For Lunch Mixed Salad, Roti, Tomato Cury or soup.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Cut Fruits than later Coffee With less sugar.</p>
                        </td>
                        <td>Dinner Green gram With Roti and Bhindi and Mixed Salad.<p><font color="#00FFFF"> For Dessert Fresh Berries.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Sunday</td>
                         <td>For Breakfast Orange-Vanilla Oat Meal.</td>
                        <td>For Lunch Steamed Rice, Chole.<p><strong> <font color="#FFFF00"> For Snack </strong> Sandwich.</p>
                        </td>
                        <td>Dinner Low Fat Paneer, Salad with Honey Dressing.<p><font color="#00FFFF"> For Dessert Any kind of Ice-cream.</p></td>
                      </tr>
                    
                     </tbody>
                   </table>
             </div>


             <div class="box timing wow slideInRight">
              <center>
                <h3 class="">Muscle Gain Workout Plan
                </h3>
              </center>
                   <table class="table">
                    <p>    </p>
                     <tbody>
                      <tr>
                        <td class="day">Monday</td>
                         <td>For Breakfast Peanut Butter Or whole Toast.</td>
                        <td>For Lunch Chicken and Pasta Salad.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Nuts Or Seeds Or Coffee.</p>
                        </td>
                        <td>Dinner Steamed Rice and Dal, Roasted Soyabeans .<p><font color="#00FFFF"> For Dessert Soaked Almonds or Banana.</p></td>
                      </tr>

                      <tr>
                        <td class="day">Tuesday</td>
                        <td>For Breakfast Pancake Or Almond Milk, Fruits.</td>
                        <td>For Lunch Egg and Cheese slice and Avocado and Salad.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Toast With Peanut Butter or Jam. </p>
                        </td>
                        <td>Dinner Biryani and Roast Chicken.<p><font color="#00FFFF"> For Dessert Fruit Salad.</p></td>
                      </tr>

                      <tr>
                        <td class="day">Wednesday</td>
                         <td>For Breakfast Sweet Pototo or Omelette.</td>
                        <td>For Lunch Rice, Dal, LadyFinger with low fat Paneer.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> 50gms cheese, canned Tunna.</p>
                        </td>
                        <td>Dinner Spaghetti With Mixed Salad And With Some Cheese and Paneer slices.<p><font color="#00FFFF"> For Dessert Fruit Smoothie.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Thursday</td>
                         <td>For Breakfast Wholegrain Cereal With milks and fruits.</td>
                        <td>For Lunch Roasted Chicken and Noodels With Salad.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Banana Or soaked almonds.</p>
                        </td>
                        <td>Dinner Rice and Dal, With Paneer and Roasted Chicken. <p><font color="#00FFFF"> For Dessert Fuit Pop with yougurt.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Friday</td>
                        <td>For Breakfast Mushroom or avocardo Or Whole Egg and Banana.</td>
                        <td>For Lunch Vegetables stuffed paratha with Chicken/Paneer in excess amount
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Toast with Butter or cookies.</p>
                        </td>
                        <td>Dinner Sprout with rice, Dal, Baked Vegetables with salad.<p><font color="#00FFFF"> For Dessert Soaked almonds and dry fruits.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Saturday</td>
                         <td>For Breakfast Fruit toast with Smoothie.</td>
                        <td>For Lunch Tuna and Mixed salad, Chicken Soup.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Cookies or Banana and Coffee.</p>
                        </td>
                        <td>Dinner Whole Eggs and omelet and Chicken Biryani.<p><font color="#00FFFF"> For Dessert Fruit salad with curd.</p></td>
                      </tr>
                      <tr>
                        <td class="day">Sunday</td>
                        <td>For Breakfast 1 latte with Eggs and Toast. </td>
                        <td>For Lunch Noodels Soup and Roast Chicken.
                        <p><strong> <font color="#FFFF00"> For Snack </strong> Roasted Soyabean or almonds with coffe.</p>
                        </td>
                        <td>Dinner Rice, Dal, Panner, Mixed Salad and Roasted Soyabean.<p><font color="#00FFFF"> For Dessert Ice-craams,Fruit slices.</p></td>
                      </tr>
                      
                     </tbody>
                   </table>
             </div>
        </div>
     </div>

 </section>

<!-- Diet Plan End -->

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