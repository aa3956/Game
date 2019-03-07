//----------------------------------------------------------------------------------------------------

//Function to start the game 
var gameStarted = false;
function startGame() {
    document.getElementById("introScreen").style.display = "none";    
    gameStarted = true;
}

//----------------------------------------------------------------------------------------------------

function leaderboard(){
    document.getElementById("leaderboardButton").onclick = function () {
        location.href = "http://localhost/Game/Leaderboard.php";
    };
}

//----------------------------------------------------------------------------------------------------

//Trigger the draw event when the window is loaded so that we can see the starting state of the game
window.onload = draw;
 
//Listen for key events so that we can control the spaceship
window.onkeydown = handleKeyEvent;

//----------------------------------------------------------------------------------------------------

//Score tracker
var score = 0;
var scoreInterval = 5;

//Skater X and Y positions
var skaterXPos = 133;
var skaterYPos = 112;

//CanvasWidth and CanvasHeight
var canvasWidth = 500;
var canvasHeight = 500;

//Skater speed
var skaterSpeed = 5;

//Object speed
var objectSpeed = 10;

//Size of character and object
var skaterSize = 40;
var busHeight = 40;
var busWidth = 40;

//Get the canvas by id
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

//Create an array holding all of the asteroids
var bus = [];
bus.push({xPos: 40, yPos: 20});
bus.push({xPos: 130, yPos: 20});
bus.push({xPos: 225, yPos: 20});

//Set up the skater image ready to draw
var skaterImg = new Image(30, 30);
skaterImg.src = "images/gameCharacter.png";

//Set up background image ready to draw
var backgroundImg = new Image();
backgroundImg.src = "images/background.png";

//Set up objectImage
var objectImg = new Image();
objectImg.src = "images/bus.png";

//----------------------------------------------------------------------------------------------------

//Called when the user presses a key
function handleKeyEvent(event){

    //Find key code for buttons
    var key = event.keyCode;

    //Left and right
    if(key === 39)
        skaterXPos += objectSpeed;
    else if (key === 37)
        skaterXPos -= objectSpeed;

    //Call draw function when we have changed the location of the bus
    draw();
}

//----------------------------------------------------------------------------------------------------

var imgy = 0;

//Draws everything on the canvas
function draw(){
    
    //onload check if theres anyone logged in 
    checkLogin();
    
    //Initialising game 
    if (!gameStarted){
        return;
    }
    
    //Draw background image
    ctx.drawImage(backgroundImg, 0, imgy - 150, 300, 150);
    ctx.drawImage(backgroundImg, 0, imgy++, 300, 150);
    
    //imgy speed control
    if (imgy == 150) {
        imgy = 0;
    }
    
    //Collision of objects with the character
    for (car of bus) {
        
        //Check collision
        var collides = false;
        
        //Top left corner of skater is inside envelope of car
        if((skaterYPos >= car.yPos && skaterYPos <= car.yPos + busHeight) && (skaterXPos >= car.xPos && skaterXPos <= car.xPos + busWidth))
            collides = true;
        
        //Collison detects then display Game Over
        if (collides){
            ctx.font = "300px";
            ctx.fillText("GAME OVER!", 120, 80);
            ctx.fillText("SCORE: " + score, 120, 90);
            ctx.fillStyle = "aqua";
            
            //Save the score of the user after game ends
            saveScore();
            clearInterval(myGame);
            return false;
        }
    }
    
    //Draw the score on the canvas and keep track of it 
    score += scoreInterval;
    ctx.fillText("Score: " + score, 10, 10);
    ctx.fillStyle = "aqua";

    //Draw skater
    ctx.drawImage(skaterImg,skaterXPos,skaterYPos, skaterSize, skaterSize);

    //Draw bus
    drawObjects();
}

//----------------------------------------------------------------------------------------------------

//Function to save the score
function saveScore(){
    
    //Retrieve the loggedInUsers details 
    if(localStorage.loggedInUser !== undefined){
        var user = JSON.parse(localStorage[localStorage.loggedInUser]);
        
        //Check if the topScore is less than their score if it is update
        if (user["topScore"] < score){
        user["topScore"] = score;
            localStorage[localStorage.loggedInUser] = JSON.stringify(user);
        }
    }
}

//----------------------------------------------------------------------------------------------------

//Draws the bus on the canvas
function drawObjects(){
    
    //Initialising game 
    if (!gameStarted){
        return;
    }
        
    //Work through the bus array
    for(var i = 0; i < bus.length; ++i){
        
        //Draw each bus at its position
        var tmpBus = bus[i];
        ctx.drawImage(objectImg, tmpBus.xPos,tmpBus.yPos, busWidth, busHeight);
    }
}

//----------------------------------------------------------------------------------------------------

//Moves  the buses down the canvas
function moveObjects(){
    
    //For loop to go through bus array 
    for(var i = 0; i < bus.length; ++i){
        var tmpBus = bus[i];
        tmpBus.yPos += skaterSpeed;
        
        //Check to see if asteroid has gone off canvas
        if (tmpBus.yPos > canvas.height){
            tmpBus.yPos=0;
        }
    }
    draw();
}

//----------------------------------------------------------------------------------------------------

//Function to update all functions
function update() {
    draw();
    drawObjects();
    moveObjects();
}
var myGame = setInterval(update, 70);

//----------------------------------------------------------------------------------------------------