<?php

//This function below is echoing all the links for pages
function links() {
    $imports = '
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="styles.css">
        <link rel="stylesheet"  href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
';
    echo $imports;
}

//This function below is echoing the logo on all pages
function logo() {
    $logoImage= ' 
        <div class="well" id="logoWell">
            <a href="Mainframe.php"><img id="ImageWell" src="images/transparentlogo.gif" width="200px" height="200px"></a>
            <a href="Mainframe.php"><img id="ImageWell2" src="https://images.cooltext.com/5035924.png" width="650" height="101"/></a>
        </div>
';
    echo $logoImage;
}

//This funtion below is echoing the navigation on all pages
function navigation() { 
    $navbar = '
        <div class="container" id="navbar">
            <ul class="nav navbar-nav">
              <li><a href="Mainframe.php">Home <i class="fa fa-home"></i></a></li>
              <li><a href="Leaderboard.php">Leaderboard <i class="fa fa-tasks"></i></a></li>
              <li><a href="ContactUs.php">Contact Us <i class="fa fa-user-circle-o"></i></a></li>
              <li><a href="PrivacyPolicy.php">Privacy Policy <i class="fa fa-user-plus"></i></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            </ul>
        </div>
';  
    echo $navbar;
}

//This function is echoing the footer on all pages 
function footer () {
    $footerNav = '
        <footer class="container-fluid text-center">
            <div>
                <h4 style="color:white;">Follow our Social Media to keep updated!</h4>
                    <a href="https://www.facebook.com/Road-Surfer-126833264695195/"><button type="button" class="btn btn-danger">Facebook <i class="fa fa-facebook-official" style="font-size:24px"></i></button></a>

                    <a href="https://twitter.com/RoadSurfer2017"><button type="button" class="btn btn-danger">Twitter <i class="fa fa-twitter-square" style="font-size:24px"></i></button></a>

                    <a href="https://www.instagram.com/roadsurfer2017/"><button type="button" class="btn btn-danger">Instagram <i class="fa fa-instagram" style="font-size:24px"></i></button></a>

                    <a href="https://www.youtube.com/channel/UCUaIJ0PJhFCv9_3utDPXS9g"><button type="button" class="btn btn-danger"> Youtube <i class="fa fa-youtube-square" style="font-size:24px"></i></button></a>

                    <a href="roadsurfer2017@outlook.com"><button type="button" class="btn btn-danger">Hotmail <i class="fa fa-envelope-square" style="font-size:24px"></i></button></a>

                    <p text-align="center" style="color:white;">Copyright © 2017 Ahmed Aziz </p>
            </div>
        </footer>
';
    echo $footerNav;
}

?>