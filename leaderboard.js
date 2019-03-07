//-------------------------------------------------------------------------------------------

//Array to hold all data of top user scores
var rankingArr = [];

//Function to build a ranking table
function rankingTable() {
    
    //For loop to go through the local storage
    for (var i = 0; i < localStorage.length; i++){
        
        //Get the localstorage key
        var key = localStorage.key(i);
        if (key != "loggedInUser"){
            
            //Get the logged in users information 
            var user = JSON.parse(localStorage.getItem(key));
            
            //Variable username to hold their name and score
            var username = {name: "", score: ""};
            username.name = user.username;
            username.score = user.topScore;
            
            //Populate the array with name and score
            rankingArr.push(username); 
        }   
    }
    
    //Sort the users that have top scores going from highest to lowest
    rankingArr.sort(function(no1, no2){ 
        return no2.score - no1.score
    });
    
    //Adding to the table for leaderboards by ID and numberOfScores to keep the number of columns im displaying
    var numberOfScores;
    
    //Number of columns and populate with users
    if (rankingArr.length >= 9) {
        numberOfScores = 9;
    } 
    else {
        numberOfScores = rankingArr.length;
    }
    
    //Add the information to the table 
    for (var i = 0; i < numberOfScores; i++){
        var username = rankingArr[i].name;
        var score = rankingArr[i].score;
        
        //Get the table rows by ID
        document.getElementById("username_" + i).innerHTML = username;
        document.getElementById("score_" + i).innerHTML = score;            
    }
}

//-------------------------------------------------------------------------------------------