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
<title>Team</title>
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
    <!-- team section start -->
    <div class="team_section layout_padding">
      <div class="container">
        <h1 class="choose_taital"><span>Our </span> <span style="color: #1f1f1f">Team</span></h1>
        <p class="choose_text">A dedicated and collaborative team committed to achieving our goals through innovation, creativity, and hard work.</p>
        <div class="team_section_2 layout_padding">
          <div class="container">
            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="images/fotor_2023-3-5_0_30_33.png"><br><b>Sujal Gangshettiwar</b></div>
                </div>
                <div class="col-sm-7">
                  <h1 class="consectetur_text">Explorer</h1>
                  <p class="dummy_text">"Have passion in exploring the latest technologies and understanding how they can be leveraged to solve problems."<br><br></p>
                </div>
              </div>
            </div>
            <div class="images_main">
              <div class="row">
                <div class="col-sm-7">
                  <h2 class="consectetur_text_1">Courageous</h2>
                  <p class="dummy_text_1">"A courageous tech enthusiast who fearlessly explores the frontiers of innovation and uses technology to make a positive impact on the world".<br><br></p>
                </div>
                <div class="col-sm-5">
                  <div class="image_dev"><img src="images/fotor_2023-4-14_12_23_2.png"><br><b> Divyashree Choudary</b></div>
                </div>
              </div>
            </div>
            <div class="images_main_1">
              <div class="row">
                <div class="col-sm-5">
                  <div class="image_4"><img src="images/fotor_2023-4-14_12_24_31.png"><br><b>Shlok Goel</b></div>
                </div>
                <div class="col-sm-7">
                  <h2 class="consectetur_text">Ambitious</h2>
                  <p class="dummy_text">"An ambitious technophile and gamer who is constantly seeking to innovate and leverage technology to achieve their goals." <br><br></p>
                </div>
              </div>
            </div>
            <div class="images_main">
              <div class="row">
                <!-- <div class="col-sm-7">
                  <h2 class="consectetur_text_1">Nonsectetur</h2>
                  <p class="dummy_text_1">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                </div> -->
                <div class="col-sm-5">
                  <!-- <div class="image_4"><img src="images/img-7.png"></div>
                  <h6 class="follow_text">Follow Us</h6>
                  <div class="follow_social_icon">
                    <ul>
                      <li><a href="#"><img src="images/fb-icon.png"></a></li>
                      <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                      <li><a href="#"><img src="images/linkden-icon.png"></a></li>
                      <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                    </ul>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- team section end -->
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
    </script>  
</body>
</html>