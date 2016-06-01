$(function(){
"use strict";

var pattern = [];
var userPattern = [];
var count = 0;
var round = 0;
var userPatternIndex = 0;
var patternIndex = 0;

$('#round').text('Round: ' + round);

//function that starts each level
function startGame(){
    var x = Math.floor((Math.random() * 4) + 1);
    pattern.push (x);
    console.log(pattern);
    console.log(count);
    userPattern = [];
    patternIndex = 0;
    userPatternIndex = 0;
        
    round++;
    $('#round').html('Round: ' + round);

    var patternInterval = setInterval(function() {
        if (pattern[count] == 1){
            $('#colorRed').fadeOut(100).fadeIn(100)
        } else if (pattern[count] == 2){
            $('#colorYellow').fadeOut(100).fadeIn(100)
        } else if (pattern[count] == 3){
            $('#colorBlue').fadeOut(100).fadeIn(100)
        } else if (pattern[count] == 4){ 
            $('#colorGreen').fadeOut(100).fadeIn(100)
        };

        count++;

        if (count == pattern.length){
        clearInterval(patternInterval);
        console.log('cleared interval');
        count = 0;
        };

    }, 1000);
};

//Function for resetting game
function resetGame (){
    $('body').css({ 
    'background-image':'url()',
    });
    $('#canvas').show();
    round = 0;
    count = 0;
    $('#round').html('Round: ' + round);
    pattern= [];
    userPattern = [];
};

//checks randomly generated array against pattern user inputs
function checkCondition(){
    console.log(userPattern);
    if (userPattern[userPatternIndex] == pattern[patternIndex]){
        console.log ('success');
        userPatternIndex++;
        patternIndex++;
    } else {
        $('body').css({
            'background-image':'url(/img/youlose.png)',
            'background-attachment' : 'fixed',
            'background-size' : '100%'
        });
        $('#canvas').hide();
        round = 0;
        $('#round').html('Round: ' + round);
        userPatternIndex = 0;
        patternIndex = 0;
        userPattern = [];
    };

    if (userPatternIndex == pattern.length){
        startGame();
    };
};

//Starts game (calls start function)
$(document).on('click', '#randomNumbers', function (){
    resetGame();
    startGame();
});

//Resets game board (calls reset function)
$(document).on('click', '#reset', function(){
    resetGame();
});

//For rounds other than 0 on slice click, pushes user's pattern to array and calls compare function 
$(document).on('click', '.sliceRed', function(){
    if (round == 0){
        resetGame();
    } else {
        userPattern.push(1);
        checkCondition(); 
    };
});

$(document).on('click', '.sliceYellow', function(){
    if (round == 0){
        resetGame();
    } else {
        userPattern.push(2);
        checkCondition();
    };
});

$(document).on('click', '.sliceBlue', function(){
    if (round == 0){
        resetGame();
    } else {
        userPattern.push(3);
        checkCondition();
    };
});

$(document).on('click', '.sliceGreen', function(){
    if (round == 0){
        resetGame();
    } else {
        userPattern.push(4);
        checkCondition();
    };
});

});