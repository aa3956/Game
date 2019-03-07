<!-- With the require functions below i am echoing in the links, navbar, logo, footer and content for the leaderboard page -->
<?php require ('navbarAndfooter.php');?>


<!DOCTYPE html>
<html>
   <head>
      <!-- With the function below i am echoing the links for my pages from another page -->
      <?php links(); ?> 
       <script src="leaderboard.js"></script>
   </head>
   <body onload="rankingTable()">
      <!-- With the function below i am echoing the logo on this page from another page -->
      <?php logo(); ?>  
      <!-- With the function below i am echoing the Navbar on this page from another page -->
      <?php navigation(); ?>
      <!-- The container and row is used to hold my content for the leaderboard page -->
      <div class="container text-center">
         <div class="row content">
            <!-- The div below i have created to hold the leaderboard image -->
            <div class="well" id="leaderboardWell" >
               <img id="leaderboardImage" src="https://images.cooltext.com/5035503.png" width="280" height="62"/>
            </div>
            <!-- The div below i have created to hold the content for my leaderboard page -->
            <div class="well" id="leaderboardWell2">
               <!-- The table below uses an imported class with 11 columns and its a default table with a border and sorted -->
                <div id="leaderboardTable" class="table-responsive col-md-11">
                    <table class="grid table table-bordered table-sortable">
                        <!-- <thead> is the table header and in there i have placed two images of username and score -->
                        <thead>
                            <tr>
                                <th></th>
                                <th><img id="UsernameImage" src="https://images.cooltext.com/5035509.png" width="183" height="62"/></th>
                                <th><img id="ScoreImage" src="https://images.cooltext.com/5035526.png" width="140" height="62"/></th>
                            </tr>
                        </thead>

                        <!--<tbody> is the table body and in there i have added inputs which will store the username and score and display them-->
                        <!--<tr> is the table row -->
                        <!--<td> is the table data -->
                        
                        <tbody>
                            <tr>
                                <td style="color: white;">1</td>
                                <td id="username_0"></td>
                                <td id="score_0"></td>
                            </tr>

                            <tr>
                                <td style="color: white;">2</td>
                                <td id="username_1"></td>
                                <td id="score_1"></td>
                            </tr>

                            <tr>
                                <td style="color: white;">3</td>
                                <td id="username_2"></td>
                                <td id="score_2"></td>
                            </tr>

                            <tr>
                                <td style="color: white;">4</td>
                                <td id="username_3"></td>
                                <td id="score_3"></td>
                            </tr>

                            <tr>
                                <td style="color: white;">5</td>
                                <td id="username_4"></td>
                                <td id="score_4"></td>
                            </tr>

                            <tr>
                                <td style="color: white;">6</td>
                                <td id="username_5"></td>
                                <td id="score_5"></td>
                            </tr>

                            <tr>
                                <td style="color: white;">7</td>
                                <td id="username_6"></td>
                                <td id="score_6"></td>
                            </tr>
                            
                            <tr>
                                <td style="color: white;">8</td>
                                <td id="username_7"></td>
                                <td id="score_7"></td>
                            </tr>
                            
                            <tr>
                                <td style="color: white;">9</td>
                                <td id="username_8"></td>
                                <td id="score_8"></td>
                            </tr>
                        </tbody> 
                    </table>   
                </div>
            </div>
         </div>
      </div>
      <!-- With the function below i am echoing the footer on this page from another page -->      
      <?php footer(); ?>
   </body>
</html>