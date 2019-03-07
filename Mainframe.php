<!-- With the require functions below i am echoing in the links, navbar, logo, footer for the mainframe page -->
<?php require ('navbarAndfooter.php');?>


<!DOCTYPE html>
<html>
   <head>
       <title>Road Surfer</title>
      <!-- With the function below i am echoing the links for my pages from navbarAndfooter.php page -->
      <?php links(); ?>  
      <script src="login.js"></script>
   </head>
   <body onload="checkLogin()">
      <!-- With the function below i am echoing the logo on this page from another page -->
      <?php logo();?>
      <!-- With the function below i am echoing the Navbar on this page from another page -->    
      <?php navigation(); ?>
      <!-- The container and row is used to hold the boostrap column of 12 i have made below -->
      <div class="container">
         <div class="row">
            <!-- Below i have used a div to create a boostrap column of 12 -->     
            <div class="col-sm-12" id="boots">
                
               <!-- The div below has a well class which is holding the login and game ads i have -->
               <div class="well" id="leftWell">
                   
                    <!-- The div below creates a form which has the label of a username and password, as well as forms for the user to fill -->
                    <div id="LoginForm">
                        <div class="form-group">
                            <label>Username:</label>
                                <input type="text" class="form-control input-sm"  id="userMain" placeholder="Enter username" required>
                            <label>Password:</label>
                                <input type="password" class="form-control input-sm" id="passwordMain" placeholder="Enter password" required>
                        </div>

                       <!-- Trigger the modal with a button -->
                       <p id="forgot1"><a data-toggle="modal" data-target="#forgotPass">Forgot Password?</a></p>

                        <!-- Modal -->
                        <div id="forgotPass" class="modal fade" role="dialog">
                          <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Forgot Password?</h4>
                              </div>
                              <div class="modal-body">
                                <input type="text" class="form-control input-sm" placeholder="Enter Username" required><br>
                                <input type="text" class="form-control input-sm" placeholder="Email" required><br>
                                <input type="text" class="form-control input-sm" placeholder="Old Password" required><br>
                                <input type="text" class="form-control input-sm" placeholder="New Password" required><br>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Send Email</button>
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                              </div>
                            </div>

                          </div>
                        </div>

                        <!-- The button below is for the user to click and allow them to log in to their accounts -->
                        <button id="loginButton" type="submit" class="btn btn-danger input-sm" onclick="login()" onclick="loggedUser">Log in</button>
                        <br>
                        <br>
                    </div>
                    
                    <!-- The image below is for the top games image -->
                    <img id="TopGamesImage" src="https://images.cooltext.com/5035718.png" height="60px" width="150px">

                    <!-- The image below is of the first advert and allows the user to go the page of the game -->
                    <a href="https://www.miniclip.com/games/8-ball-pool-multiplayer/en/#t-w-c-H"><img id="ad1Image" src="images/football.png" height="60px" width="60px" style="border: 1px solid;"></a>

                    <!-- The image below is of the second advert and allows the user to go the page of the game -->
                    <a href="https://www.miniclip.com/games/arctic-drift/en/#t-sd"><img id="ad2Image" src="images/car2.png" height="60px" width="60px" style="border: 1px solid;"></a>

                    <!-- The image below is of the third advert and allows the user to go the page of the game -->
                    <a href="http://www.mariogames.be/Super_Mario_Land_Game"><img id="ad3Image" src="images/mario.png" height="60px" width="60px" style="border: 1px solid;"></a>

                    <!-- The image below is of the fourth advert and allows the user to go the page of the game -->
                    <a href="https://www.miniclip.com/games/happy-wheels/en/"><img id="ad4Image" src="images/happywheels.png" height="60px" width="60px" style="border: 1px solid;"></a>

                    <!-- The image below is of the fifth advert and allows the user to go the page of the game -->
                    <a href="https://www.miniclip.com/games/8-ball-pool-multiplayer/en/#t-w-c-H"><img id="ad5Image" src="images/8ballpool.png" height="60px" width="60px" style="border: 1px solid;"></a>

                    <!-- The image below is of the sixth advert and allows the user to go the page of the game -->
                    <a href="https://www.miniclip.com/games/bob-the-robber-4/en/#t-w-c-H"><img id="ad6Image" src="images/bankRobber.png" height="60px" width="60px" style="border: 1px solid;"></a>

                    <!-- The button below is for more games for the user to visit and has a link to the website -->
                    <a href="https://www.miniclip.com/games/en/"><button id="MoreGames" class="btn btn-danger input-sm"> More Games</button></a>
                  
                    <!-- The canvas below is for my Game, where it will be placed -->
                   
                    <div id="introScreen">
                        <img src="https://images.cooltext.com/5067730.png" width="449" height="109" id="welcomeImage"/>
                        <br>
                        <button class="btn btn-danger" type="button" onclick="startGame()" id="startButton">Start Game</button>
                        <br>
                        <button class="btn btn-danger" type="button" id="leaderboardButton" onclick="leaderboard()">Top Scores</button>
                        <br>
                        <button class="btn btn-danger" type="button" id="difficultyButton">Difficulty</button>
                        <br>
                        <button class="btn btn-danger" type="button" id="settingButton">Settings</button>
                    </div>
                   
                    <canvas id="myCanvas"></canvas>
                    <script src="game.js"></script> 
               </div>
            </div>
         </div>
      </div>
      <!-- With the function below i am echoing the footer on this page from another page -->    
      <?php footer(); ?>
   </body>
</html>