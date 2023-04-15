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
<title>GetFit</title>
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
<!--font awesome-->
<script src="https://kit.fontawesome.com/c43c777a9b.js" crossorigin="anonymous"></script>
<!-- owl stylesheets --> 
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>


  <!--header section start -->
    <div class="header_section">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <div class="logo"><a href="index.php"><img src="images/WhatsApp_Image_2023-04-15_at_1.52.45_PM-removebg-preview.png"></a></div>
          </div>
          <div class="col-md-9">
            <div class="menu_text">
              <ul>
                <div class="togle_3">
                  <div class="menu_main">
                  </div>
                  <!-- <div class="shoping_bag"><img src="images/search-icon.png"></div> -->
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
        </div>
      </div>


    <!-- banner section start -->
    <div class="banner_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <!-- <h1 class="banner_taital">MAKE </h1>  -->
            <h1 class="banner_taital_1">MAKE <br>FITNESS<br> A&ensp;HABIT</h1>
            <h2 class="banner_text">"Work out. Eat well. Be patient. Your body will reward you."</h2>
            <!-- <div class="contact_bt"><a href="contact.php">CONTACT US<span class="contact_padding"><img src="images/contact-icon.png"></span></a></div> -->
          </div>
          <div class="col-sm-2">
            <!-- <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div> -->
          </div>
          <div class="col-sm-5">
            <div><img src="images/WhatsApp_Image_2023-04-15_at_5.56.59_PM-removebg-preview.png" class="image_1"></div>
            <!-- <button type="button" class="btn btn-outline-light download-button"><i class="fa-solid fa-location-dot"></i> Location</button> -->
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
    </div>
    <!-- header section end -->

    <!-- choose section start -->
    <div class="choose_section layout_padding">
      <div class="container">
        <h1 class="choose_taital"><span>Our</span> <span style="color: #1f1f1f">Results</span></h1>
        <p class="choose_text">Some of the results that clients have shown!</p>
        <div class="choose_section_2 layout_padding">
          <div class="row">
            <div class="col-lg-4 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital"><img src="images/WhatsApp Image 2023-04-15 at 1.29.24 PM.jpeg"></h1>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital"><img src="images/WhatsApp Image 2023-04-15 at 1.30.01 PM.jpeg"></h1>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="choose_box">
                <h1 class="client_taital"><img src="images/WhatsApp Image 2023-04-15 at 1.38.39 PM.jpeg"></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- choose section end -->


    <!-- services section start -->
    <div class="services_section layout_padding">
      <div class="container">
        <h1 class="services_taital"><span></span>  <span style="color: #1f1f1f">Feedbacks</span></h1>
        <h3 class="services_text">It is our pleasure to hear your valuable feedback...</h3>
        <div id="main_slider" class="carousel slide" data-ride="carousel">
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
                      <p class="lorem_text active">“The trainers are really nice to me and I have been struggling with my weight for some time but because of getfit I have been able to lose nearly 10kg of my weight" <br>-Sam</p>
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
          <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
        </div>
      </div>
    </div>
    <!-- services section start -->


    <!-- about section start -->
    <div class="about_section layout_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div><img src="images/WhatsApp_Image_2023-04-15_at_1.36.41_PM-removebg-preview.png" class="image_2"></div>
          </div>
          <div class="col-md-6">
            <h1 class="services_taital"><span>Get Fit With World</span> <span style="color: #1f1f1f"></span></h1>
            <p class="ipsum_text">Regular physical activity is one of the most important things you can do for your health. Being physically active can improve your brain health, help manage weight, reduce the risk of disease, strengthen bones and muscles, and improve your ability to do everyday activities.Adults who sit less and do any amount of moderate-to-vigorous physical activity gain some health benefits. Only a few lifestyle choices have as large an impact on your health as physical activity.Everyone can experience the health benefits of physical activity – age, abilities, ethnicity, shape, or size do not matter.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- about section end -->
    


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
                  <div class="image_dev"><img src="images/fotor_2023-4-14_12_23_2.png"><br><b> Divyashree Chaudhary</b></div>
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
                
                <div class="col-sm-5">
                  
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- newsletter section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
      <div class="container">
        <div class="footer_main">
          <div class="footer_left">
            <h1 class="contact_taital"><span>Contact </span> <img src="images/icon-2.png"> <span>Us</span></h1>
          </div>
          <div class="footer_left">
            <div class="location_text"><a href="#"><img src="images/map-icon.png"><span class="padding_left_15">Location</span></a></div>
          </div>
          <div class="footer_left">
            <div class="location_text"><a href="#"><img src="images/call-icon.png"><span class="padding_left_15">+91 9307736565</span></a></div>
          </div>
          <div class="footer_left">
            <div class="location_text"><a href="#"><img src="images/mail-icon.png"><span class="padding_left_15">GetFit@gmail.com</span></a></div>
          </div>
        </div>
        <div class="contact_section">
          <div class="row">
            <div class="col-md-12">
              <div class="mail_section">
                <input type="" class="email_text" placeholder="Name" name="Name">
                <input type="" class="email_text" placeholder="Email" name="Email">
                <input type="" class="email_text" placeholder="Phone Number" name="Phone Number">
                <textarea class="massage_text" placeholder="Message" rows="5" id="comment" name="Message"></textarea>
                <div class="send_bt"><a href="#">send</a></div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="social_icon">
                <ul>
                  <li><a href="#"><img src="images/fb-icon1.png"></a></li>
                  <li><a href="#"><img src="images/twitter-icon1.png"></a></li>
                  <li><a href="#"><img src="images/linkden-icon1.png"></a></li>
                  <li><a href="#"><img src="images/instagram-icon1.png"></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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