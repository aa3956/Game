//Trigger the draw event when the window is loaded so that we can see the starting state of the game
window.onload = draw;

//Listen for key events so that we can control the spaceship
window.onkeydown = handleKeyEvent;

var score = 0;
var scoreInterval = 100;

//This will move the asteroids and redraw the canvas every 100ms
var timer = setInterval(moveObjects, scoreInterval);

//Location of the spaceship
var skaterXPos = 133;
var skaterYPos = 108;

//Size of the canvas
var canvasWidth = 500;
var canvasHeight = 500;

//How fast the asteroids move
var skaterSpeed = 5;

//How fast the spaceship moves
var objectSpeed = 10;

var skaterSize = 40;
var busHeight = 37;
var busWidth = 37;


//Global variables pointing to the canvas and context
var canvas = document.getElementById("myCanvas");
var ctx = canvas.getContext("2d");

//Create an array holding all of the asteroids
var asteroids = [];
//Firt lane asteriods
asteroids.push({xPos: 20 , yPos: 20});

//Second lane asteroids
asteroids.push({xPos: 100 ,yPos: 20});

//Third lane Asteroids
asteroids.push({xPos: 200  , yPos: 20});

//Set up the spaceship image ready to draw
var skaterImg = new Image(30, 30);
skaterImg.src = "images/gameCharacter.png";

//Set up background image ready to draw
var backgroundImg = new Image();
backgroundImg.src = "images/background.png";

//Set up objectImage
var objectImg = new Image();
objectImg.src = "images/bus.png";

//Called when the user presses a key
function handleKeyEvent(event){

    //Each key has a pariticular number associated with it - this is the key code
    var key = event.keyCode;

    //Left and right
    if(key === 39)
        skaterXPos += objectSpeed;
    else if (key === 37)
        skaterXPos -= objectSpeed;

    //Call draw function when we have changed the location of the spaceship
    draw();
}

var imgy = 0;

//Draws everything on the canvas
function draw(){
    
    //Collision of objects with the character
    for (car of asteroids) {
        
        //console.log("carx: " + car.xPos + "; cary: " + car.yPos + "; skaterX: " + skaterXPos + "; skatery: " + skaterYPos);
        var collides = false;
        
        //Top left corner of skater is inside envelope of car
        if((skaterYPos >= car.yPos && skaterYPos <= car.yPos + busHeight) && (skaterXPos >= car.xPos && skaterXPos <= car.xPos + busWidth))
            collides = true;
        
        //Collison detects then display Game Over
        if (collides){
            ctx.fillText("GAME OVER!", 110, 80);
            ctx.fillText("SCORE: " + score, 120, 90);
            ctx.fillStyle = "red";
            score = 0;
            clearInterval(timer);
            return false;
        }
    }
    
    //Draw background image
    ctx.drawImage(backgroundImg, 0, imgy - 150, 300, 150);
    ctx.drawImage(backgroundImg, 0, imgy++, 300, 150);
    
    if (imgy == 150) {
        imgy = 0;
    }

    //Draw spaceship
    ctx.drawImage(skaterImg,skaterXPos,skaterYPos, skaterSize, skaterSize);

    //Draw asteroid
    drawObjects();
    
     score += scoreInterval;
    ctx.fillText("Score: " + score, 10, 10);
    ctx.fillStyle = "aqua";
}

//Draws the asteroids on the canvas
function drawObjects(){
    
    //Work through the asteroids array
    for(var i = 0; i < asteroids.length; ++i){
        
        //Draw each asteroid at its position
        var tmpAst = asteroids[i];
        ctx.drawImage(objectImg, tmpAst.xPos,tmpAst.yPos, busWidth, busHeight);
    }
}

//Moves  the asteroids down the canvas
function moveObjects(){
    for(var i = 0; i < asteroids.length; ++i){
        var tmpAst = asteroids[i];
        tmpAst.yPos += skaterSpeed;
        
        //Check to see if asteroid has gone off canvas
        if (tmpAst.yPos > canvas.height){
            tmpAst.yPos=0;
        }
        
    }

    draw();
}

