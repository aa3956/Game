<!-- With the require functions below i am echoing in the links, navbar,logo, footer and content for the contact us page -->
<?php require ('navbarAndfooter.php');?>

<!DOCTYPE html>
<html>
   <head>
      <!-- With the function below i am echoing the links for my pages from navbarAndfooter.php page -->
      <?php links(); ?>
   </head>
   <body>
      <!-- With the function below i am echoing the logo on this page from another page -->
      <?php logo();?>
      <!-- With the function below i am echoing the Navbar on this page from another page -->
      <?php navigation(); ?>
      <!-- The container and row is used to hold my content for the Contact Us page -->
      <div class="container text-center">
         <div class="row content">
            <!-- The div below is to hold my contact us image -->     
            <div class="well" id="ContactUsWell" >
               <img id="ContactUsImage" src="https://images.cooltext.com/5035549.png" width="275" height="62"/>
                
               <!-- The div below i have created is to hold the how can we help you? image -->
                <div class="well" id="ContactUsWell2">
                    <img id="HelpImage" src="https://images.cooltext.com/5038621.png" width="429" height="54"/>
                </div>

                <!-- The image below is for the name of the user contacting -->
                <img id="nameIMAGE" src="https://images.cooltext.com/5038693.png" width="100" height="46"/>

                <!-- The form below is for the users name to fill in -->
                <form id="box1"> 
                    <input type="text" name="firstname" placeholder="Name">
                </form>

                <!-- The image below is for the users email image -->
                <img id="emailIMAGE" src="https://images.cooltext.com/5038694.png" width="115" height="46"/>

                <!-- The form below is for the user to fill in using their email -->
                <form id="box2"> 
                    <input type="text" name="email" placeholder="Email">
                </form>

                <!-- The image below is the subject image -->
                <img id="subjectIMAGE" src="https://images.cooltext.com/5038696.png" width="145" height="46"/>

                <!-- The form below is for the scroll bar for the user to choose the type of query they want to contact about -->
                <form id="box3">
                    <select>
                        <option>General Enquiry</option>
                        <option>Game Developement</option>
                        <option>Other</option>
                    </select>
                </form>

                <!-- The image below is for the comment they want to send with their query -->
                <img id="commentIMAGE" src="https://images.cooltext.com/5038706.png" width="145" height="46"/>

                <!-- The form below is for the input of the user for their comments -->
                <form id="box4">
                    <textarea rows="9" cols="80" placeholder="Enter Comment"></textarea>
                </form>

                <!-- The button below is for the user to enter -->
                <button id="button1" type="submit" class="btn btn-danger input-sm">Send</button>
            </div>
         </div>
      </div>
      <!-- With the function below i am echoing the footer on this page from another page -->      
      <?php footer(); ?>
   </body>
</html>