//-------------------------------------------------------------------------------------------

//Register the user and checks for any empty fields (validation) 
function register(){
    if(!val()){
        return;
    }
    storeUser();
}

//-------------------------------------------------------------------------------------------

//Store the details of the user into local storage
function storeUser() {

    //Build object that we are going to store
    var usrObject = {};

    usrObject.name = document.getElementById("name").value;
    usrObject.username = document.forms.UsernameEntryBox.username.value;
    usrObject.email = document.getElementById("email").value;
    usrObject.password = document.getElementById("password").value;
    usrObject.Confirmpassword = document.getElementById("confirmPassword").value;
    usrObject.day = document.getElementById("day").value;
    usrObject.month = document.getElementById("month").value;
    usrObject.year = document.getElementById("year").value;
    usrObject.topScore = 0;

    //Check if users password confirmation matches, if not return error message
    if(ConfirmEntryBox.confirmPassword.value != PasswordEntryBox.password.value){
        document.getElementById("result").innerHTML = "Passwords Do Not Match Please Check!";
        return false;
    }
    
    //Store User using the key username
    localStorage[usrObject.username] = JSON.stringify(usrObject);

    //Inform user of result
    document.getElementById("result").innerHTML = "You Have Sucessfully Registered with Road Surfer!";
}

//-------------------------------------------------------------------------------------------

//if user returns to the page local storage immediately recognizes the logged in user
function showName() {
    if(localStorage.usrName != undefined) 
        alert("Hello " + localStorage.usrName);
}

//-------------------------------------------------------------------------------------------

//Remember the username of the user for logging in 
function storeName() {
    var username = UsernameEntryBox.username.value;
        localStorage.usrName = username;
}

//-------------------------------------------------------------------------------------------

// checks if any values of entry have been missed and gives alert 
function val() {
    //Checks if the name 
    if(NameEntryBox.name.value == ""){
        document.getElementById("result").innerHTML = "Please Enter Your Name!";
        NameEntryBox.name.focus();
        return false;
    }
    if(UsernameEntryBox.username.value == ""){
        document.getElementById("result").innerHTML = "Please Enter Your Username!";
        UsernameEntryBox.username.focus();
        return false;
    }
    if(EmailEntryBox.email.value == ""){
        document.getElementById("result").innerHTML = "Please Enter Your Email!";
        EmailEntryBox.email.focus();
        return false;
    }
    if (!EmailEntryBox.email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)){
        document.getElementById("result").innerHTML = "Email Incorrect Format!";
        return false;
    }
         
    if(PasswordEntryBox.password.value == ""){
        document.getElementById("result").innerHTML = "Please Enter Your Password!";
        PasswordEntryBox.password.focus();
        return false;
    }
    if(ConfirmEntryBox.confirmPassword.value == ""){
        document.getElementById("result").innerHTML = "Please Confirm Your Password!";
        ConfirmEntryBox.confirmPassword.focus();
        return false;
    }

    if((PasswordEntryBox.password.value).length < 8){
        document.getElementById("result").innerHTML = "Password Should Be Minimum 8 Characters!";
        PasswordEntryBox.password.focus();
        return false;
    }
    else 
        return true;
}

//-------------------------------------------------------------------------------------------