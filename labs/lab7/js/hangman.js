 //Javascript
 
var selectWord= "";
var selectHint= "";
var board = "";
var remainingGuesses = 6;
var words=["snake","monkey", "bettle", "flamingo", "octopus"];
console.log(words[0]);

window.onload = startGame();

function startGame(){
    pickWord();
    initBoard();
    updateBoard();
}

 /* fill board with underscores */
function initBoard(){
        for(var letter in selectWord){
             board+= "_";
                }
    }

function pickWord(){
    var randomInt = Math.floor(Math.random() * words.length);
    selectWord = words[randomInt];

}

function updateBoard(){
    for(var letter of selectWord){
            document.getElementById("word").innerHTML += letter + " ";
        }
}

                
$("#letterBtn").click(function(){
    
    var boxVal = $("#letterBox").val();
    console.log("You pressed the button and it had the value: " +boxVal);
})