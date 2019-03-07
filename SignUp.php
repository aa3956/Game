<!-- With the require functions below i am echoing in the links, navbar,logo, footer and content for the sign up page -->
<?php require ('navbarAndfooter.php');?>

<!DOCTYPE html>
<html>
   <head>
      <!-- With the function below i am echoing the links for my pages from navbarAndfooter.php page -->
      <?php links(); ?>
       <script src="Register.js"></script>
   </head>
   <body>
      <!-- With the function below i am echoing the logo on this page from another page -->    
      <?php logo(); ?>
      <!-- With the function below i am echoing the Navbar on this page from another page -->    
      <?php navigation(); ?>
      <!-- The container and row is used to hold my content for the Sign Up page -->  
      <div class="container text-center">
         <div class="row content">
             
            <!-- The div below is to hold my sign up image -->
            <div class="well" id="SignUpWell" >
               <img id="SignUpImage" src="https://images.cooltext.com/5035708.png" width="260" height="62"/>
            </div>
             
            <!-- The div below is for the help image -->
            <div class="well" id="SignUpWell2"> 
                <img id="HelpImage" src="https://images.cooltext.com/5038758.png" width="649" height="62"/>
            </div> 

            <!-- The image below is for the name of the user -->
            <img id="nameImage" src="https://images.cooltext.com/5039284.png" width="84" height="30"/>

            <!-- The form below is for the name of the user to fill in -->
            <form id="NameEntryBox" onsubmit="return false"> 
                <input type="text" id="name"  value="David" placeholder="Name" required>
            </form>        

            <!-- The image below is for the username image -->
            <img id="usernameImage" src="https://images.cooltext.com/5039285.png" width="160" height="46"/>

            <!-- The form below is for the username for the user to fill in -->
            <form id="UsernameEntryBox"> 
                <input type="text" name="username" placeholder="Username" value="David" required>
            </form>        

            <!-- The image below is for the email of the user -->
            <img id="emailImage" src="https://images.cooltext.com/5038694.png" width="115" height="46"/>

            <!-- The form below is for the email for the user to fill in -->
            <form id="EmailEntryBox"> 
                <input type="email" id="email" placeholder="Email"  value="david@gmail.com" required>
            </form>        

            <!-- The image below is for the password of the user -->
            <img id="passwordImage" src="https://images.cooltext.com/5039286.png" width="160" height="46"/>

            <!-- The form below is for the password for the user to fill in -->
            <form id="PasswordEntryBox"> 
                <input type="password" id="password" placeholder="Password"  value="12345678"  required>
            </form>  

            <!-- The image below is for the confirm password of the user -->
            <img id="confirmPasswordImage" src="https://images.cooltext.com/5039288.png" width="280" height="46"/>

            <!-- The form below is for the confirm password for the user to fill in -->
            <form id="ConfirmEntryBox"> 
                <input type="password" id="confirmPassword"  value="12345678"  placeholder="Confirm Password" required>
            </form>        

            <!-- The image below is for the date of birth image -->
            <img id="dateOfBirthImage" src="https://images.cooltext.com/5039289.png" width="235" height="46"/>

            <!-- The form below is for the day for the user to fill in -->
            <form id="input1"> 
                <input type="text" id="day" placeholder="Day"  value="11" required>
            </form>        
            <!-- The form below is for the month for the user to fill in -->
            <form id="input2">
                <select id="month" required>
                    <option value="january">January</option>
                    <option value="february">February</option>
                    <option value="march">March</option>
                    <option value="april">April</option>
                    <option value="may">May</option>
                    <option value="june">June</option>
                    <option value="july">July</option>
                    <option value="august">August</option>
                    <option value="september">September</option>
                    <option value="october">October</option>
                    <option value="november">November</option>
                    <option value="december">December</option>
                </select>
            </form>

            <!-- The form below is for the year for the user to fill in -->
            <form id="input3"> 
                <input type="text" id="year"  value="1998" placeholder="Year" required>
            </form>  

            <!-- The input below is a checkbox for the user -->
            <label><input type="checkbox" id="rememberBox" onclick="storeName()"> Remember Me</label>

            <!-- The paragraph below has a link to the privacy policy page for the user to accept and see -->
            <p id="terms">By creating an account you agree to our <a href="PrivacyPolicy.php">Terms & Privacy</a></p>

            <!-- The div below controls the Register button -->
            <div class="well" id="buttonWell">    
                <button id="button" type="submit" onclick="register()" class="btn btn-danger input-sm" >Register</button>
            </div>
             
            <p id="result"></p>
            
             
         </div>
      </div>
      <!-- With the function below i am echoing the footer on this page from another page -->      
      <?php footer(); ?>
   </body>
</html>