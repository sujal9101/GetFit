<?php
require('db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!-- basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- mobile metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="initial-scale=1, maximum-scale=1">
<!-- site metas -->
<title>My Plan</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content=""> 
<!-- bootstrap css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!-- style css -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<!-- Responsive-->
<link rel="stylesheet" href="css/responsive.css">
<!-- fevicon -->
<link rel="icon" href="images/apple-touch-icon.png" type="image/gif" />
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
<!-- Tweaks for older IEs-->
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

</head>
<body>
  <!--header section start -->
    <div class="header_section background_bg">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-2">
            <div class="logo"><a href="index.php"><img src="images/WhatsApp_Image_2023-04-15_at_1.52.45_PM-removebg-preview.png"></a></div>
          </div>
          <div class="col-md-5">
                    <?php if (!empty($_SESSION['first_name'])) { ?>
                      <span class='' style='color:white;font-size:20px' >Hello <?= $_SESSION['first_name'] ?> &nbsp;</span>
                        <a href="user-info.php" class="btn btn-dark download-button">My Info</a>
                        <a href="<?= ($_SESSION['current_weight'] >= $_SESSION['targeted_weight']) ? 'weight-loss.php' : 'weight-gain.php' ?>" class="btn btn-dark download-button"> My Plan</a>
                        <a href="logout.php" class="btn btn-dark download-button"> Log Out</a>
                        <?php
                        }else{?>
                            <a href="login.php" class="btn btn-dark download-button"> Log In</a>
                            <a href="signup.php" class="btn btn-dark download-button"> Sign Up</a>
                        <?php 
                        }
                        ?>  
                    </div>
          <div class="col-md-5">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                </div> 
                <div id="myNav" class="overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                  <a href="index.php">Home</a>
                  <a href="services.php">feedback</a>
                  <a href="about.php">About</a>
                  <a href="choose.php">Results</a>
                  <a href="team.php">Team</a>
                  <a href="contact.php">Contact Us</a>
                </div>
                </div>
                <span class="navbar-toggler-icon"></span>
                <span onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
              </ul>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <!-- header section end -->


    <br><br>
    <br><br>
                        
  <div class="water_tracker">
      <center><h1>Water Intake Tracker</h1><center>
    <form>
      <label for="amount">Add water in glasses:</label>
      <input type="number" id="amount" min=1 max=100 name="amount">
      <input type="button" value="Add" onclick="addWater()">
    </form>
    <p id="waterConsumed">You have consumed 0 glasses of water today.</p>
    <script>
      let waterConsumed = 0;
      function addWater() {
        let amount = parseInt(document.getElementById("amount").value);
        waterConsumed += amount;
        document.getElementById("waterConsumed").innerHTML = `You have consumed ${waterConsumed} glasses of water today.`;
      }
    </script>
  </div>


    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
       <center><h1 >My Diet</h1> <center>
      <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active ">
                    <p  class="lorem_text active "><img src="images/WhatsApp Image 2023-04-16 at 3.36.53 AM.jpeg"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      
                    <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-16 at 3.37.06 AM.jpeg"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-16 at 3.37.20 AM.jpeg"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-16 at 3.36.53 AM.jpeg"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-16 at 3.37.06 AM.jpeg"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-16 at 3.37.20 AM.jpeg"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
        
        <br>
        <br>
        <br>

        <h1>Diet Tracker</h1>
	
	<form>
		<fieldset>
			<legend>Log Meal</legend>
			<label for="meal_calories">Calories consumed:</label>
			<input type="number" id="meal_calories" name="meal_calories">
			<input type="submit" value="Log Meal">
		</fieldset>
	</form>
	<fieldset>
		<legend>View Progress</legend>
		<p>Calories consumed: <span id="calorie_total">0</span>/<span id="calorie_goal">2000</span></p>
	</fieldset>
	<script>
		var calorie_goal = 2000;
		var calorie_total = 0;
		document.querySelector('#calorie_goal').textContent = calorie_goal;
		document.querySelector('form').addEventListener('submit', function(event) {
			event.preventDefault();
			if (event.target.elements.meal_calories) {
				var meal_calories = parseInt(event.target.elements.meal_calories.value);
				calorie_total += meal_calories;
				document.querySelector('#calorie_total').textContent = calorie_total;
			}
		});
	</script>
  <br>
  <br>
  <br>
        <h1>My Exercises</h1> 
      <div id="exercise_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                    <p  class="lorem_text active"><img src="images/10 Cardio Exercises You Can Do Anywhere.gif"></p>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>


            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/Carve a Shredded Six-pack with our Ultimate Abs Workout.gif"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/Dumbbell Shrug GIF - Dumbbell Shrug - Discover & Share GIFs.gif"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/Exercise Close Grip Bench Press GIF - Exercise Close Grip Bench Press Workout - Discover & Share GIFs.gif"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/The 20 Best Arm Exercises and Workouts for Pumping up Your Biceps and Triceps.gif"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-12">
                    <div class="box_section active">
                      <p  class="lorem_text active"><img src="images/The Truth About The Big Three.gif"></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <a class="carousel-control-prev" href="#exercise_slider" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#exercise_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>

      </div>
    </div>
    <!-- about section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript --> 
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
    $(document).ready(function(){
    $(".fancybox").fancybox({
    openEffect: "none",
    closeEffect: "none"
    });
         
    $(".zoom").hover(function(){
         
    $(this).addClass('transition');
    }, function(){
         
    $(this).removeClass('transition');
    });
    });
    </script> 
    <script>
     function openNav() {
     document.getElementById("myNav").style.width = "100%";
    }
     function closeNav() {
     document.getElementById("myNav").style.width = "0%";
    }
    // $('#exercise_slider').carousel();
    </script>  
</body>
</html>
