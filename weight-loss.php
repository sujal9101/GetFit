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
<title>About</title>
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
                  <!-- <div class="menu_main">
                    <div class="padding_left0"><a href="#">Register</a>
                    <span class="padding_left0"><a href="#">Login</a></span></div>
                  </div>
                  <div class="shoping_bag"><img src="images/search-icon.png"></div> -->
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
    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
       <h1>My Diet</h1> 
      <div id="main_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                        
                      <p class="lorem_text active">Excellent personal training. Trainers who really care and go above and beyond to help you achieve your goals. regular updates that feels more personal. Highly recommended! <br>-Shaun</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      
                      <p class="lorem_text">“Getfit has been awesome to me. Their trainers are exceptional, the overall vibe is great and I have had nothing but good experiences.”<br>-Benetlin</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      
                      <p class="lorem_text active">"The best thing about this get fit idea is that I can do it at home is extremely convenient I can see great results"<br>-Divs</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      
                      <p class="lorem_text">"The most convenient thing is that i can do this whenever I want.”<br>-Mithun</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      
                      <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-15 at 1.29.24 PM.jpeg"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      
                      <p class="lorem_text">“I have used many fitness websites and i can honestly say that Getfit is one of the best fitness and health website. I would highly recommend It. ”<br>-Zash</p>
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
        <br>
        <br>
        <h1>My Exercises</h1> 
      <div id="exercise_slider" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <!-- <div class="tiles_img"></div> -->
                      <!-- <h3 class="tile_text active">Tile & Grout</h3> -->
                      <p class="lorem_text active">Excellent personal training. Trainers who really care and go above and beyond to help you achieve your goals. regular updates that feels more personal. Highly recommended! <br>-Shaun</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <!-- <div class="tiles_img_1"></div> -->
                      <!-- <h3 class="tile_text">Carpet Cleaning</h3> -->
                      <p class="lorem_text">“Getfit has been awesome to me. Their trainers are exceptional, the overall vibe is great and I have had nothing but good experiences.”<br>-Benetlin</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <!-- <div class="tiles_img"></div> -->
                      <!-- <h3 class="tile_text active">Tile & Grout</h3> -->
                      <p class="lorem_text active">"The best thing about this get fit idea is that I can do it at home is extremely convenient I can see great results"<br>-Divs</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <!-- <div class="tiles_img_1"></div> -->
                      <!-- <h3 class="tile_text">Carpet Cleaning</h3> -->
                      <p class="lorem_text">"The most convenient thing is that i can do this whenever I want.”<br>-Mithun</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="services_section_2 layout_padding">
                <div class="row">
                  <div class="col-md-6">
                    <div class="box_section active">
                      <!-- <div class="tiles_img"></div> -->
                      <!-- <h3 class="tile_text active">Tile & Grout</h3> -->
                      <p  class="lorem_text active"><img src="images/WhatsApp Image 2023-04-15 at 1.29.24 PM.jpeg"></p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="box_section">
                      <!-- <div class="tiles_img_1"></div> -->
                      <!-- <h3 class="tile_text">Carpet Cleaning</h3> -->
                      <p class="lorem_text">“I have used many fitness websites and i can honestly say that Getfit is one of the best fitness and health website. I would highly recommend It. ”<br>-Zash</p>
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
    <!-- copyright section start -->
    <!-- <div class="copyright_section">
      <div class="container">
        <p class="copyright_text">Copyright 2020 All Right Reserved By <a href="https://html.design">Free html  Templates</a></p>
      </div>
    </div> -->
    <!-- copyright section end -->
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
