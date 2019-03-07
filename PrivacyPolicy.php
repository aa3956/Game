<!-- With the require functions below i am echoing in the links, navbar,logo, footer and content for the privacy policy page -->
<?php require ('navbarAndfooter.php');?>

<!DOCTYPE html>
<html>
   <head>
      <!-- With the function below i am echoing the links for my pages from navbarAndfooter.php page -->
      <?php links(); ?>     
   </head>
   <body>
      <!-- With the function below i am echoing the logo on this page from another page -->    
      <?php logo(); ?>  
      <!-- With the function below i am echoing the Navbar on this page from another page -->    
      <?php navigation(); ?>
      <!-- The container and row is used to hold my content for the Privacy policy page -->
      <div class="container text-center">
         <div class="row content">
            <!-- The div below is to hold my privacy image -->
            <div class="well" id="PrivacyPolicyWell" >
               <img id="PrivacyPolicyImage" src="https://images.cooltext.com/5035713.png" width="280" height="62"/>
               <!-- The div below is for the privacy policy image and page -->
                <div class="well" id="PrivacyPolicyWell2">
                    <!-- The image below is the "what data road surfer collects from you?" image -->
                    <img id="DataLogo" src="https://images.cooltext.com/5039399.png" width="628" height="48"/>

                    <!-- The paragraph below is about some terms of road surfer -->
                    <p style="text-align:left;">In this Privacy Policy "data" means any personal data about you which could identify you (by itself or in combination with other data) such as your name, address or email address. </p>

                    <!-- The paragraph below is about some terms of road surfer -->
                    <p style="text-align: left;">We may collect the following data about you: </p>

                    <!-- The bullet points below are some of the things that road surfer collects from user -->
                    <ul style="text-align: left;">>If you register with us (such as your date of birth, username, password and email address) </ul>
                    <ul style="text-align: left;">>That you provide by entering any competitions or completing any surveys, including your scores and ranking in any competition </ul>
                    <ul style="text-align: left;">>Information you provide by completing any in-game purchases, such as buying in-game currency and other items </ul>
                    <ul style="text-align: left;">>Information you provide by participating in any Miniclip chat forums or social media functions </ul>

                    <p style="text-align: left;">We may use your data in the following ways: </p>

                    <ul style="text-align: left;">>To provide you with the Services </ul>
                    <ul style="text-align: left;">>To customise the Services which are available to you </ul>
                    <ul style="text-align: left;">>To restrict those we know are under-age from accessing inappropriate content </ul>
                    <ul style="text-align: left;">>To ensure that you are in compliance with our terms </ul>
                    <ul style="text-align: left;">>To personalise your experience </ul>
                </div> 
            </div>
         </div>
      </div>
      <!-- With the function below i am echoing the footer on this page from another page -->      
      <?php footer(); ?>
   </body>
</html>