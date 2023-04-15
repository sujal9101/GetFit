<?php
require ("db.php");
if(!isset($_SESSION['user_id']) || empty($_SESSION['user_id'])){
    header("Location: login.php"); //if user is not login redirect to login.php
   }


$data = [
    ':id' => $_SESSION['user_id'],
];
$stmt = $conn->prepare("SELECT * FROM user WHERE id=:id");
$stmt->execute($data);
$user = $stmt->fetch();
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
        <title>User Info</title>
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


        <!-- team section start -->
        <div class="team_section layout_padding">
            <div class="container">
                <h1>User Info</h1>
                <form name="cmp" id="cmp" action="user-info-post.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4">
                                <label for="gender">Gender</label><br>
                                <select class="formcontrol" name="gender" id="gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="Male" <?= (isset($user['gender']) && $user['gender'] == 'Male') ? 'selected' : '' ?>>Male</option>
                                    <option value="Female" <?= (isset($user['gender']) && $user['gender'] == 'Female') ? 'selected' : '' ?>>Female</option>
                                    <option value="Others" <?= (isset($user['gender']) && $user['gender'] == 'Others') ? 'selected' : '' ?>>Others</option>
                                </select>
                            </div>
                            <div class="col-4">
                                <label for="age">Age</label>
                                <input type="number" name="age" value="<?= isset($user['age']) ? $user['age'] : '' ?>" class="form-control" placeholder="Your age"  min="1" max="100"required>
                            </div>
                            <div class="col-4">
                                <label for="height">Height</label>
                                <input type="number" name="height" value="<?= isset($user['height']) ? $user['height'] : '' ?>" class="form-control" id="height" placeholder="Height in cms" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="current_weight">Current Weight</label>
                                <input type="number" name="current_weight" value="<?= isset($user['current_weight']) ? $user['current_weight'] : '' ?>" class="form-control" id="current_weight" placeholder="Current weight in kg" required>
                            </div>
                            <div class="col-6">
                                <label for="weight">Targeted Weight</label>
                                <input type="number" name="targeted_weight" value="<?= isset($user['targeted_weight']) ? $user['targeted_weight'] : '' ?>" class="form-control" id="targeted_weight" placeholder="Targeted weight in kg" required>
                            </div>
                        </div>
                    </div>

                    <button type="submit"  class="btn btn-primary mb-2">Submit </button>
                </form>
            </div>
        </div>
    </div>
    <!-- team section end -->


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
                                    $(document).ready(function () {
                                        $(".fancybox").fancybox({
                                            openEffect: "none",
                                            closeEffect: "none"
                                        });

                                        $(".zoom").hover(function () {

                                            $(this).addClass('transition');
                                        }, function () {

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