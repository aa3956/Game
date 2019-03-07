//When the page loads check if any user is logged in if they are display their form
function checkLogin() {
    if (localStorage.loggedInUser !== undefined){
        
        //Extract details of logged in user
        var usrobj = JSON.parse(localStorage[localStorage.loggedInUser]);
        
        //Change the form to display a logged in user
        document.getElementById("LoginForm").innerHTML = "<img src='https://images.cooltext.com/5065006.png' width='100' height='46'/>" + localStorage.loggedInUser + "<img src='https://images.cooltext.com/5065008.png' width='115' height='46'/>" + usrobj.topScore + "<img src='https://images.cooltext.com/5065012.png' width='145' height='46'/>" + "<br><button class='btn btn-danger' onclick='logout()' id='logOut'>Logout</button><br><br>";
    }
}

//-------------------------------------------------------------------------------------------

//Function to allow user to logout
function logout() {
    localStorage.removeItem("loggedInUser");
    alert("You have successfully Logged out");
    
    //Display the original logIn form
    var backToForm = document.getElementById("LoginForm").innerHTML = " <div class='form-group'> <label>Username:</label> <input type='text' class='form-control input-sm' id='userMain' placeholder='Enter username' required> <label>Password:</label> <input type='password' class='form-control input-sm' id='passwordMain' placeholder='Enter password' required> </div> <p id='forgot1'><a data-toggle='modal' data-target='#forgotPass'>Forgot Password?</a></p><div id='forgotPass' class='modal fade' role='dialog'> <div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal'>&times;</button><h4 class='modal-title'>Forgot Password?</h4></div><div class='modal-body'><input type='text' class='form-control input-sm' placeholder='Enter Username' required><br><input type='text' class='form-control input-sm' placeholder='Email' required><br></div><div class='modal-footer'><button type='button' class='btn btn-danger' data-dismiss='modal'>Send Email</button><button type='button' class='btn btn-danger' data-dismiss='modal'>Close</button></div></div></div></div><button id='loginButton' type='submit' class='btn btn-danger input-sm' onclick='login()' onclick='loggedUser'>Log in</button><br><br>"  
}

//-------------------------------------------------------------------------------------------

//Function to login 
function login() {
    
   //Check whether username exists
   var username = document.getElementById("userMain").value;
   if(localStorage[username] === undefined){//Username incorrect
       
       //error could not log in 
       alert("user does not exist. please try again");
       return;
   }
   //Retrieve username from localStorage
   var usrobj = JSON.parse(localStorage[username]);

   //Check whether username exists
   var password = document.getElementById("passwordMain").value;
    
  //Check the password user entered meets the one they registered with in local storage    
  if(password != usrobj.password){
      
       //error could not log in 
       alert("Password incorrect. Please try again");
       return;
  }
       //alert you are now logged in 
       alert("You are now logged in as " + username);
       localStorage["loggedInUser"] = username;
    
    //CheckLogin if theres anyone signed in at the moment
    checkLogin();
} 

//-------------------------------------------------------------------------------------------