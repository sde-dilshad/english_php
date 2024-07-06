<!-- views/human-hang-game.ejs -->
<?php
require_once('./inc/head.php');
$select_hangman_id = $action->database->query_sql("SELECT * FROM `tbl_hangman` WHERE status = 1;");
if ($select_hangman_id) {
   
}
?>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Human Hang Game</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->
<style>
    /* Importing Google font - Open Sans */
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
    }

    body {
        display: flex;
        padding: 0 10px;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #5E63BA;
    }

    .container {
        display: flex;
        width: 850px;
        gap: 70px;
        padding: 60px 40px;
        background: #fff;
        border-radius: 10px;
        align-items: flex-end;
        justify-content: space-between;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .hangman-box img {
        user-select: none;
        max-width: 270px;
    }

    .hangman-box h1 {
        font-size: 1.45rem;
        text-align: center;
        margin-top: 20px;
        text-transform: uppercase;
    }

    .game-box .word-display {
        gap: 10px;
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .word-display .letter {
        width: 28px;
        font-size: 2rem;
        text-align: center;
        font-weight: 600;
        margin-bottom: 40px;
        text-transform: uppercase;
        border-bottom: 3px solid #000;
    }

    .word-display .letter.guessed {
        margin: -40px 0 35px;
        border-color: transparent;
    }

    .game-box h4 {
        text-align: center;
        font-size: 1.1rem;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .game-box h4 b {
        font-weight: 600;
    }

    .game-box .guesses-text b {
        color: #ff0000;
    }

    .game-box .keyboard {
        display: flex;
        gap: 5px;
        flex-wrap: wrap;
        margin-top: 40px;
        justify-content: center;
    }

    :where(.game-modal, .keyboard) button {
        color: #fff;
        border: none;
        outline: none;
        cursor: pointer;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 4px;
        text-transform: uppercase;
        background: #5E63BA;
    }

    .keyboard button {
        padding: 7px;
        width: calc(100% / 9 - 5px);
    }

    .keyboard button[disabled] {
        pointer-events: none;
        opacity: 0.6;
    }

    :where(.game-modal, .keyboard) button:hover {
        background: #8286c9;
    }

    .game-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        pointer-events: none;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        padding: 0 10px;
        transition: opacity 0.4s ease;
    }

    .game-modal.show {
        opacity: 1;
        pointer-events: auto;
        transition: opacity 0.4s 0.4s ease;
    }

    .game-modal .content {
        padding: 30px;
        max-width: 420px;
        width: 100%;
        border-radius: 10px;
        background: #fff;
        text-align: center;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .game-modal img {
        max-width: 130px;
        margin-bottom: 20px;
    }

    .game-modal img[src="/views/assets/img/human-game-image/victory.gif"] {
        margin-left: -10px;
    }

    .game-modal h4 {
        font-size: 1.53rem;
    }

    .game-modal p {
        font-size: 1.15rem;
        margin: 15px 0 30px;
        font-weight: 500;
    }

    .game-modal p b {
        color: #5E63BA;
        font-weight: 600;
    }

    .game-modal button {
        padding: 12px 23px;
    }

    @media (max-width: 782px) {
        .container {
            flex-direction: column;
            padding: 30px 15px;
            align-items: center;
        }

        .hangman-box img {
            max-width: 200px;
        }

        .hangman-box h1 {
            display: none;
        }

        .game-box h4 {
            font-size: 1rem;
        }

        .word-display .letter {
            margin-bottom: 35px;
            font-size: 1.7rem;
        }

        .word-display .letter.guessed {
            margin: -35px 0 25px;
        }

        .game-modal img {
            max-width: 120px;
        }

        .game-modal h4 {
            font-size: 1.45rem;
        }

        .game-modal p {
            font-size: 1.1rem;
        }

        .game-modal button {
            padding: 10px 18px;
        }
    }
</style>

<!-- App Capsule -->
<!-- <div id="appCapsule"> -->
<div class="game-modal">
    <div class="content">
        <img src="#" alt="gif">
        <h4>Game Over!</h4>
        <p>The correct word was: <b>rainbow</b></p>
        <button class="play-again">Next</button>
    </div>
</div>
<div class="container">
    <div class="hangman-box">
        <img src="#" draggable="false" alt="hangman-img">
        <h1>Hangman Game</h1>
    </div>
    <div class="game-box">
        <ul class="word-display"></ul>
        <h4 class="hint-text">Hint: <b></b></h4>
        <h4 class="guesses-text">Incorrect guesses: <b></b></h4>
        <div class="keyboard"></div>
    </div>
</div>
<!-- </div> -->
<!-- * App Capsule -->
<?php
require_once('./inc/script.php');
?>
</script>
<script>
    let hungMan = <?= json_encode($select_hangman_id[0]['content']) ?> ;
    const wordList = JSON.parse(hungMan);
    const wordDisplay = document.querySelector(".word-display");
    const guessesText = document.querySelector(".guesses-text b");
    const keyboardDiv = document.querySelector(".keyboard");
    const hangmanImage = document.querySelector(".hangman-box img");
    const gameModal = document.querySelector(".game-modal");
    const playAgainBtn = gameModal.querySelector("button");

    // Initializing game variables
    let currentWord, correctLetters, wrongGuessCount;
    const maxGuesses = 6;

    const resetGame = () => {
        // Ressetting game variables and UI elements
        correctLetters = [];
        wrongGuessCount = 0;
        hangmanImage.src = "./assets/img/human-game-image/hangman-0.svg";
        guessesText.innerText = `${wrongGuessCount} / ${maxGuesses}`;
        wordDisplay.innerHTML = currentWord.split("").map(() => `<li class="letter"></li>`).join("");
        keyboardDiv.querySelectorAll("button").forEach(btn => btn.disabled = false);
        gameModal.classList.remove("show");
    }

    const getRandomWord = () => {
        const {
            w,
            h
        } = wordList[Math.floor(Math.random() * wordList.length)];
        currentWord = w;
        document.querySelector(".hint-text b").innerText = h;
        resetGame();
    }

    const gameOver = (isVictory) => {
        const modalText = isVictory ? `You found the word:` : 'The correct word was:';
        gameModal.querySelector("img").src = `./assets/img/human-game-image/${isVictory?'victory' : 'lost'}.gif`;
        gameModal.querySelector("h4").innerText = isVictory ? 'Congrats!' : 'Game Over!';
        gameModal.querySelector("p").innerHTML = `${modalText} <b>${currentWord}</b>`;
        gameModal.classList.add("show");
    }

    const initGame = (button, clickedLetter) => {
        if (currentWord.includes(clickedLetter)) {
            [...currentWord].forEach((letter, index) => {
                if (letter === clickedLetter) {
                    correctLetters.push(letter);
                    wordDisplay.querySelectorAll("li")[index].innerText = letter;
                    wordDisplay.querySelectorAll("li")[index].classList.add("guessed");
                }
            });
        } else {
            // If clicked letter doesn't exist then update the wrongGuessCount and hangman image
            wrongGuessCount++;
            hangmanImage.src = `./assets/img/human-game-image/hangman-${wrongGuessCount}.svg`;
        }
        button.disabled = true; // Disabling the clicked button so user can't click again
        guessesText.innerText = `${wrongGuessCount} / ${maxGuesses}`;

        // Calling gameOver function if any of these condition meets
        if (wrongGuessCount === maxGuesses) return gameOver(false);
        if (correctLetters.length === currentWord.length) return gameOver(true);
    }

    // Creating keyboard buttons and adding event listeners
    for (let i = 97; i <= 122; i++) {
        const button = document.createElement("button");
        button.innerText = String.fromCharCode(i);
        keyboardDiv.appendChild(button);
        button.addEventListener("click", (e) => initGame(e.target, String.fromCharCode(i)));
    }

    getRandomWord();
    playAgainBtn.addEventListener("click", getRandomWord);
</script>