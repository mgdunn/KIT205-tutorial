/* The below variables have been defined for you. Please do not delete them. */
let secretNumber = Math.trunc(Math.random() * 30) + 1;
let guesses = 10;
console.log(secretNumber);

/*
    Declare a function called 'displayMessage'. The function takes a single paramter called 'msg'.
    Within the function body:

    - set the text content of the 'message' element to the value of the 'msg' parameter.
*/


function displayMessage(msg) {
    const message = document.getElementById('message')
    message.textContent = msg;
}



/*
    Declare a function called 'checkGuess'. The function takes no paramters.
    Within the function body:

    - retrieve the value entered by the player from the input element

    - if there is no input, display a message of "Please enter a number to play...".
      (Hint: use the 'displayMessage' function you created earlier)

    - if the value entered equals the 'secretNumber':
        - display a message of "You are correct. Well done!"
        - set the background colour of the 'number' element to #67c350
        - set the text content of the 'number' element to ":-)"

    - if the value entered **does not** equal the 'secretNumber':
        - check the number of guesses the player has left
            - if the guesses remaining is greater than 1:
                - display a message of "Too high" or "Too low" depending on the value entered
                - decrement the number of guessess remaining
                - set the text content of the 'remainingGuesses' element to the guesses remaining
            - if the player has no more guesses remaning:
                - display a message of "No more guesses remaining. Bad luck. The number was NN"
                  where NN is the secretNumber.
                - set the text content of the 'remainingGuesses' element to 0
                - disable the check button
                - set the background colour of the 'number' element to #d34f4f
                - set the text content of the 'number' element to ":-("
*/

function checkGuess() {
    const guessElement = document.getElementById('guess');
    const guessedNumber = Number(guessElement.value);

    if (!guessedNumber) {
        displayMessage("Please enter a number to play...");
    } else if (guessedNumber == secretNumber) {
        //If guess is correct
        displayMessage("You are correct. Well done!");
        document.getElementById('number').style.backgroundColor = '#67c350';
        document.getElementById('number').textContent = ":-)";
    } else {
        if (guesses > 0) {
            //Determines hint message for incorrect guess
            if (guessedNumber < secretNumber) {
            displayMessage("Too low");
             } else {
            displayMessage("Too high");
            }
            document.getElementById('remainingGuesses').textContent = guesses;
            guesses--;
        } else {
            //If player has no more messages
    displayMessage(`No more guesses remaining. Bad luck. The number was ${secretNumber}`);
    document.getElementById('remainingGuesses').textContent = 0;
    document.getElementById('checkBtn').disabled = true;
    document.getElementById('number').style.backgroundColor = '#d34f4f';
    document.getElementById('number').textContent = ":-(";
        }
    } 
}


/*
    Add an event listener for the check button's 'click' event. The event listener should call
    your 'checkGuess' function when raised.

    Hint: retrieve the check button element and then use the addEventListener function.
*/

const checkButton = document.getElementById('checkBtn');
checkButton.addEventListener('click', checkGuess);
